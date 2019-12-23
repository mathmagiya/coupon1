# coupon1
Create coupons with special personal sale for your customer!

Just create folder in your website's directory and put all files into. But previously you need to create DB "couponDB" and it's 
user "couponer".

Features:<br/>
*Create coupons with a certain sale. You can adjust coupon's value to your customer;<br/>
*Output coupon in pdf;<br/>
*Check issued coupons;<br/>
*Canscel coupons;<br/>
*Statistics page. Observe: average value of <br/>
(i) all coupons;<br/> 
(ii) canced coupons;<br/>
(ii) valid coupons;<br/>


Make sure in your VPS are installed: PHP7 with PDO and mb_string extensions and tFPDF (for pdf output).
Limints: coupons have a form: AAAA-000000.

==Explanation of coupon generate function:
Each coupon has a pattern AAAA-000000 where:<br/>
-first two letters codes a day of the year;<br/>
-third letter clades a second (see generate.php);<br/>
-fourth letter codes the digit representation of a year;<br/>
-first pair of digits codes a price (by default each coupon's value is multiple of 100; e.g. if coupon's value is 1800, hence we get 18);<br/>
-second pair of digits gives 24-hours representation of hours;<br/>
-third pair returns minutes of given hours.<br/>

Total number of coupons: (366x26x24)x(100x24x60)=32,887,296,000 next 24 year.<br/>
<b>NB:</b> For Small business because diffrent coupons you can get every 3 sec. For Big business you can expand a pattern by using tenth or handreds of seconds (see 'u' in php date() function) and add one digit.

