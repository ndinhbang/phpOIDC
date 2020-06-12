<?php
include_once(__DIR__ . '/../check_admin.php');
check_admin();

if (isset($_GET['id']) ) {
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
    db_save_client_by_id($id, $_POST);
    echo "Edited row.<br />" ;
    echo "<a href='index.php?action=list'>Back To Listing</a>";
} 
$row = db_get_client_by_id($id);
?>

<form action='' method='POST'>
<div class='table1'>
<table border='1'>
<tr>
<td><b>Field</b></td>
<td><b>Value</b></td>
</tr>


<tr><td>Client Id Issued At:</td><td><input type='text' name='client_id_issued_at' value='<?= stripslashes($row['client_id_issued_at']) ?>' />
<tr><td>Client Id:</td><td><input type='text' name='client_id' value='<?= stripslashes($row['client_id']) ?>' /> </td></tr>
<tr><td>Client Secret:</td><td><input type='text' name='client_secret' value='<?= stripslashes($row['client_secret']) ?>' /> </td></tr>
<tr><td>Client Secret Expires At:</td><td><input type='text' name='client_secret_expires_at' value='<?= stripslashes($row['client_secret_expires_at']) ?>' /> </td></tr>
<tr><td>Registration Access Token:</td><td><input type='text' name='registration_access_token' value='<?= stripslashes($row['registration_access_token']) ?>' /> </td></tr>
<tr><td>Registration Client Uri Path:</td><td><input type='text' name='registration_client_uri_path' value='<?= stripslashes($row['registration_client_uri_path']) ?>' /> </td></tr>
<tr><td>Contacts:</td><td><textarea name='contacts'><?= stripslashes($row['contacts']) ?></textarea> </td></tr>
<tr><td>Application Type:</td><td><input type='text' name='application_type' value='<?= stripslashes($row['application_type']) ?>' /> </td></tr>
<tr><td>Client Name:</td><td><input type='text' name='client_name' value='<?= stripslashes($row['client_name']) ?>' /> </td></tr>
<tr><td>Logo Uri:</td><td><input type='text' name='logo_uri' value='<?= stripslashes($row['logo_uri']) ?>' /> </td></tr>
<tr><td>Tos Uri:</td><td><input type='text' name='tos_uri' value='<?= stripslashes($row['tos_uri']) ?>' /> </td></tr>
<tr><td>Redirect Uris:</td><td><textarea name='redirect_uris'><?= stripslashes($row['redirect_uris']) ?></textarea> </td></tr>
<tr><td>Post Logout Redirect Uris:</td><td><textarea name='post_logout_redirect_uris'><?= stripslashes($row['post_logout_redirect_uris']) ?></textarea></td></tr>
<tr><td>Token Endpoint Auth Method:</td><td><input type='text' name='token_endpoint_auth_method' value='<?= stripslashes($row['token_endpoint_auth_method']) ?>' /> </td></tr>
<tr><td>Token Endpoint Auth Signing Alg:</td><td><input type='text' name='token_endpoint_auth_signing_alg' value='<?= stripslashes($row['token_endpoint_auth_signing_alg']) ?>' /> </td></tr>
<tr><td>Policy Uri:</td><td><input type='text' name='policy_uri' value='<?= stripslashes($row['policy_uri']) ?>' /> </td></tr>
<tr><td>Jwks Uri:</td><td><input type='text' name='jwks_uri' value='<?= stripslashes($row['jwks_uri']) ?>' /> </td></tr>
<tr><td>Jwks:</td><td><input type='text' name='jwks' value='<?= stripslashes($row['jwks']) ?>' /> </td></tr>
<tr><td>Jwk Encryption Uri:</td><td><input type='text' name='jwk_encryption_uri' value='<?= stripslashes($row['jwk_encryption_uri']) ?>' /> </td></tr>
<tr><td>X509 Uri:</td><td><input type='text' name='x509_uri' value='<?= stripslashes($row['x509_uri']) ?>' /> </td></tr>
<tr><td>X509 Encryption Uri:</td><td><input type='text' name='x509_encryption_uri' value='<?= stripslashes($row['x509_encryption_uri']) ?>' /> </td></tr>
<tr><td>Sector Identifier Uri:</td><td><input type='text' name='sector_identifier_uri' value='<?= stripslashes($row['sector_identifier_uri']) ?>' /> </td></tr>
<tr><td>Subject Type:</td><td><input type='text' name='subject_type' value='<?= stripslashes($row['subject_type']) ?>' /> </td></tr>
<tr><td>Request Object Signing Alg:</td><td><input type='text' name='request_object_signing_alg' value='<?= stripslashes($row['request_object_signing_alg']) ?>' /> </td></tr>
<tr><td>Userinfo Signed Response Alg:</td><td><input type='text' name='userinfo_signed_response_alg' value='<?= stripslashes($row['userinfo_signed_response_alg']) ?>' /> </td></tr>
<tr><td>Userinfo Encrypted Response Alg:</td><td><input type='text' name='userinfo_encrypted_response_alg' value='<?= stripslashes($row['userinfo_encrypted_response_alg']) ?>' /> </td></tr>
<tr><td>Userinfo Encrypted Response Enc:</td><td><input type='text' name='userinfo_encrypted_response_enc' value='<?= stripslashes($row['userinfo_encrypted_response_enc']) ?>' /> </td></tr>
<tr><td>Id Token Signed Response Alg:</td><td><input type='text' name='id_token_signed_response_alg' value='<?= stripslashes($row['id_token_signed_response_alg']) ?>' /> </td></tr>
<tr><td>Id Token Encrypted Response Alg:</td><td><input type='text' name='id_token_encrypted_response_alg' value='<?= stripslashes($row['id_token_encrypted_response_alg']) ?>' /> </td></tr>
<tr><td>Id Token Encrypted Response Enc:</td><td><input type='text' name='id_token_encrypted_response_enc' value='<?= stripslashes($row['id_token_encrypted_response_enc']) ?>' /> </td></tr>
<tr><td>Default Max Age:</td><td><input type='text' name='default_max_age' value='<?= stripslashes($row['default_max_age']) ?>' /> </td></tr>
<tr><td>Require Auth Time:</td><td><input type='text' name='require_auth_time' value='<?= stripslashes($row['require_auth_time']) ?>' /> </td></tr>
<tr><td>Default Acr Values:</td><td><input type='text' name='default_acr_values' value='<?= stripslashes($row['default_acr_values']) ?>' /> </td></tr>
<tr><td>Initiate Login Uri:</td><td><input type='text' name='initiate_login_uri' value='<?= stripslashes($row['initiate_login_uri']) ?>' /> </td></tr>
<tr><td>Post Logout Redirect Uri:</td><td><input type='text' name='post_logout_redirect_uri' value='<?= stripslashes($row['post_logout_redirect_uri']) ?>' /> </td></tr>
<tr><td>Request Uris:</td><td><textarea name='request_uris'><?= stripslashes($row['request_uris']) ?></textarea> </td></tr>
<tr><td>Grant Types:</td><td><input type='text' name='grant_types' value='<?= stripslashes($row['grant_types']) ?>' /> </td></tr>
<tr><td>Response Types:</td><td><input type='text' name='response_types' value='<?= stripslashes($row['response_types']) ?>' /> </td></tr>
<tr><td>Trusted:</td><td>
        <input type='hidden' value='false' name='trusted'>
        <input type='checkbox' name='trusted' value="true" <?php  if ($row['trusted']) echo "checked"; ?> />
    </td>
</tr>

</table>
</div>
    <p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' />

</form>
<?php }

?>
