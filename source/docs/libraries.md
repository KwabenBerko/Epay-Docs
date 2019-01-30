---
extends: _layouts.documentation
section: documentation_content
---

## Libraries/Plugins

### WordPress/WooCommerce plugin

For WordPress websites which uses the WooCommerce e-commerce plugin, Epay offers an easy to use plugin that integrates the Epay payment option into your website. 

* Ensure that the WooCommerce is already installed and properly set-up on your website.
* Download the Epay payment gateway plug-in file from [here](https://github.com/AppGharage/wc-epay-payment-gateway.git) or use this link https://github.com/AppGharage/wc-epay-payment-gateway.git.
* Once installed, activate the plugin.
* Still in the WordPress admin dashboard, go to the **WooCommerce plugin settings**, and then to the Payment tab.
* If the plugin is correctly installed, there should be an **Epay payment** option among the payment gateways listed at the bottom of the page. However, it would not be enabled.
* Select the **Epay gateway**, and you would be taken to the plugin configuration page.
* Here, first enable the plugin, and then add the `merchant_key, app_id and app_secret` generated from your dashboard. Please note payments would not work without these requirements met. Once done, hit save.
* Epay should now be listed as an enabled payment gateway, and your customers would see the option to pay using Mobile money at checkout pages on your site.

 `Once you click on pay on the checkout page, you would get an approval message to approve your transaction. You can learn more on how to make these approval depending on your network [here](/docs/payment).`





Next, learn about [Managing your accounts](/docs/account-management).