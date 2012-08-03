<?

require("class.gaparse.php");

$aux = new GA_Parse($_COOKIE);

echo "Campaign source: ".$aux->campaign_source."<br />";  
echo "Campaign name: ".$aux->campaign_name."<br />";
echo "Campaign medium: ".$aux->campaign_medium."<br />";
echo "Campaign content: ".$aux->campaign_content."<br />";
echo "Campaign term: ".$aux->campaign_term."<br />";
     
echo "Date of first visit: ".$aux->first_visit."<br />";
echo "Date of previous visit: ".$aux->previous_visit."<br />";
echo "Date of current visit: ".$aux->current_visit_started."<br />";
echo "Times visited: ".$aux->times_visited."<br />";
echo "Pages viewed current visit: ".$aux->pages_viewed."<br />";
               
?>
<script>

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-279423-28']); //279423-28
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>