=== Big-Login ===
Contributors: Mixcom Media Group 
Version: 1.4
Tags: login, authentication, Big-Login, Big
Stable tag: 1.4
Requires at least: 2.5
Tested up to: 4.5.2
License: GPLv2 or later

== Description ==
= About BIG register =
The BIG register contains the official registration of healthcare professionals in The Netherlands, on behalf of the Ministry of Health, Welfare and Sport. More info about the BIG register can be found on the [official website](https://www.bigregister.nl/en/aboutthebigregister/). Technical information can be found at [this address](https://www.bigregister.nl/zoeken/zoeken_eigen_systeem/) - Dutch only.

= About this plugin =
The Big Login Plugin checks the number entered in the BIG register through a SOAP connection and sets a session variable if successful. This session variable can be used to limit access to certain pages to healthcare professionals.
The settings page provides an option to forward the user to another page after a successful login.

Requires WordPress 2.5 and PHP >= 5.1.0 with LibXML and SOAP enabled [see PHP.net](http://nl3.php.net/manual/en/book.soap.php).

= Contact =
In case of suggestions or improvements please contact MixCom Media Group at support@mixcom.nl, or through the GitHub repository (see below).

= More information =
Read the following items for more information:

* Follow MixCom Media Group on [Facebook](https://www.facebook.com/MixComMediaGroup), [Twitter](https://twitter.com/MixComMedia) and our [blog](https://mixcom.nl/blog) *(Dutch only)*
* Other WordPress Plugins by MixCom Media Group - http://profiles.wordpress.org/exed-internet/
* MixCom Media Group official website - [https://mixcom.nl/online](https://mixcom.nl/online?utm_source=wordpress&utm_medium=social%2Bmedia)

== Installation ==
1. Upload the folder `big-login` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Set the url pointer in case of a successful login 
4. Place the widget on the page where you want to have it.

= Technical information =
* This plugin uses PHP SOAP. SOAP requires LibXML as well.
* The session variable set after successful login is `$_SESSION['professional']`
* The plugin uses the option variable `big-login-url`
* The *RibizSearch class* does not make full use of the BIG register functionality, but only uses the functionality to check the validity of the provided BIG number
* The BIG number consists of 12 digits

== Frequently Asked Questions ==

Can I only use a full url as target after successful?

A: No, it is possible to set a path as well. Make sure you start with a "/".

== Change Log ==
= 1.4 =
- Add Dutch translations, improve code

= 1.3 =
- Updated to handle multiple return values

= 1.2 =
- Updated to latest webservice version

= 1.1.2 =
- Updated for WordPress 4.1

= 1.1.1 =
- Updated readme

= 1.1 =
Updated styling

= 1.0 =
Initial release

== Configuration ==

The redirect url in case of a successful login can be set through the settings page. This page is available in the left side menu.

== Upgrade Notice ==
-

== Screenshots ==
1. The settings

2. The widget
