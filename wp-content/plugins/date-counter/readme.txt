=== Date counter ===
Contributors: pankratovkm
Donate link: http://donatepay.ru/d/107738
Tags: Date, counter, days, months, years
Requires at least: 3.1
Tested up to: 5.2.3
Stable tag: 1.0.2
Requires PHP: 5.3
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
WC requires at least: 1.0
WC tested up to: 3.7.0

== Description ==

Date counter - is just a 3 kilobytes WordPress plugin that allows you to add a shortcode to count difference between two dates using start and end dates or display the current date easily.

= Format options =

* **currentYear** - displays the current Year
* **currentMonth** - displays the current Month
* **currentDay** - displays the current Day

Don't need anymore to change copyright year in footer each year!

`INPUT:  Copyright © [DateCounter format="currentYear"].`
`OUTPUT: Copyright © 2019.`

* **Years** - displays the difference in Years
* **Months** - displays the difference in Months
* **Days** - displays the difference in Days
* **Hours** - displays the difference in Hours
* **Minutes** - displays the difference in Minutes
* **Seconds** - displays the difference in Seconds

Example:

`INPUT:  I'm [DateCounter startDate="1998-08-25" endDate="now" format="Years"] years old!`
`OUTPUT: I'm 21 years old!`

* [Custom output format](https://www.php.net/manual/ru/dateinterval.format.php)

Example:

`INPUT:  It's been [DateCounter startDate="2019-08-31" endDate="now" format="%a"] days since the end of summer :(`
`OUTPUT: It's been 15 days since the end of summer :(`

= startDate and endDate options =

* **Any date format:** 01.01.1991, 01-01-1991, 1991.01.01, 1991-01-01
* **Now** - gets current date and time

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/date-counter` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Place shortcode **[DateCounter startDate="date" endDate="date" format="outputFormat"]**.

== Upgrade Notice ==

= 1.0.2 =
Added support for [PHP DateInterval::format](https://www.php.net/manual/ru/dateinterval.format.php)

== Changelog ==

= 1.0.2 =
* Improved calculations
* Added support for [PHP DateInterval::format](https://www.php.net/manual/ru/dateinterval.format.php)

= 1.0.1 =
* Just a first version of a Date counter plugin.