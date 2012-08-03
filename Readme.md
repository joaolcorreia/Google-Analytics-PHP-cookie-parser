[*Google Analytics PHP cookie parser*](http://joaocorreia.pt/google-analytics-scripts/google-analytics-php-cookie-parser/)
=================
by [João Correia](http://joaocorreia.pt/)

Google Analytics collects data using first-party cookies who are stored on our browsers. I’ve programmed a PHP class we can use to read Google Analytics __utma and __utmz cookies. This class can be used to easily integrate this cookie data into proprietary systems like CRM, ERP, Helpdesks, etc.

* **__utma (expires 2 years after being defined) – visitor data**. This cookie is written on your first visit to the website. In case you erase it its created again. Its used for the Unique Visitors calculation and is updated on every pageview.

* **__utmz (expires 6 months after being defined) – campaign data**. This cookie stores informations on how the user got to our website: referrer, direct (none), organic or a campaign such as a newsletter. (since you tag it correctly using the URL Builder). This cookie is overwritten every time you visit the website.

The Google Analytics Cookie Parser allows you to obtain some data contained in this cookies in a human readable format. For example, you can see how you got here by visiting: http://joaocorreia.pt/example.php.

* **Campaign source**
* **Campaign name**
* **Campaign medium**
* **Campaign content**
* **Campaign term**
* **Date of first visit**
* **Date of previous visit**
* **Date of current visit**
* **Times visited**
* **Pages viewed**