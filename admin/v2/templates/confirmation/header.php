<?php
/**
 * Confirmation header template
 *
 * @package    MailChimp_WooCommerce
 * @subpackage MailChimp_WooCommerce/admin
 */

?>

<?php
if ( (bool) get_site_transient( 'mailchimp_woocommerce_start_sync' ) ) {
	MailChimp_WooCommerce_Admin::connect()->startSync();
}
$store_id = mailchimp_get_store_id();
$mailchimp_api = mailchimp_get_api();
$store         = $mailchimp_api ? $mailchimp_api->getStoreIfAvailable( $store_id ) : null;
?>
<div class="mc-wc-header-content confirmation">
    <div class="mc-wc-header-content-wrapper">
        <div class="mc-wc-header-content-details">
            <h2 class="mc-wc-title"><?php esc_html_e('You’re on your way!', 'mailchimp-for-woocommerce'); ?></h2>
        </div>
        <div class="mc-wc-header-content-image">
            <div class="mc-wc-image">
                <img src="<?php echo esc_attr( plugin_dir_url( __FILE__ ) . '../../assets/images/Mailchimp-image.png' ); ?>" alt="<?php esc_html_e( 'Mailchimp Woocommerce', 'mailchimp-for-woocommerce' ); ?>">
            </div>
        </div>
    </div>
    <div class="mc-wc-header-content-footer">
        <div class="mc-wc-header-content-footer-wrapper">
            <p class="mc-wc-descripition"><?php esc_html_e('Most syncs take less than a few hours, but larger stores could take longer. We’ll send an email to [email address] when the sync is finished. Head to your Mailchimp dashboard to continue setup while your sync is in progress.', 'mailchimp-for-woocommerce'); ?></p>
            <a href="http://admin.mailchimp.com/integrations/manage?name=woocommerce&source=partner" target="_blank" class="mc-wc-btn mc-wc-btn-primary mc-wc-btn-md"><?php esc_html_e('Continue to Mailchimp', 'mailchimp-for-woocommerce'); ?></a>
        </div>
    </div>
</div>