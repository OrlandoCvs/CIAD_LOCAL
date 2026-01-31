<?php
// ldap.php

class AuthLDAP {
    private $ldap_server = "ldap://192.168.0.39";
    private $bind_dn = "CN=ldap user,CN=Users,DC=ciad,DC=local";
    private $bind_password = "Dtic1420";
    private $grupo_dn = "CN=grupo-investigacion,OU=Grupos,DC=ciad,DC=local";

    public function Autenticar($usuario_login, $usuario_password) {
        $ldap_conn = ldap_connect($this->ldap_server);
        ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap_conn, LDAP_OPT_REFERRALS, 0);

        if (!$ldap_conn) {
            return false;
        }

        // 1. Bind técnico
        if (!@ldap_bind($ldap_conn, $this->bind_dn, $this->bind_password)) {
            ldap_unbind($ldap_conn);
            return false;
        }

        // 2. Buscar DN del usuario
        $search_base = "DC=ciad,DC=local";
        $search_filter = "(sAMAccountName=" . ldap_escape($usuario_login, "", LDAP_ESCAPE_FILTER) . ")";
        $attributes = ["dn", "memberOf"];

        $search_result = ldap_search($ldap_conn, $search_base, $search_filter, $attributes);
        $entries = ldap_get_entries($ldap_conn, $search_result);

        if ($entries["count"] == 0) {
            ldap_unbind($ldap_conn);
            return false;
        }

        $user_dn = $entries[0]["dn"];

        // 3. Autenticar con credenciales del usuario
        if (!@ldap_bind($ldap_conn, $user_dn, $usuario_password)) {
            ldap_unbind($ldap_conn);
            return false;
        }

        // 4. Validar pertenencia a grupo
        $is_member = false;
        if (isset($entries[0]["memberof"])) {
            for ($i = 0; $i < $entries[0]["memberof"]["count"]; $i++) {
                if (strcasecmp($entries[0]["memberof"][$i], $this->grupo_dn) === 0) {
                    $is_member = true;
                    break;
                }
            }
        }

        ldap_unbind($ldap_conn);
        return $is_member;
    }
}
?>
