<?php
include('connection.php');
 
 
		$headingtxt1;
		$txtvalue1 ;
		$txtvalue2 ;
		$txtvalue3;
        $weather;

  $sq=mysqli_query($db, "SELECT * FROM `tab` WHERE id=1");
  while($rowdata=mysqli_fetch_array($sq))
  {
	   $headingtxt1=$rowdata['heading'];
	   $txtvalue1=$rowdata['txt1'];
	   $txtvalue2=$rowdata['txt2'];
	   $txtvalue3=$rowdata['txt3'];
  }
 
		$headingtxt2;
		$txtvalue4 ;
		$txtvalue5 ;
		$txtvalue6;
  
  
  $sq=mysqli_query($db, "SELECT * FROM `tab` WHERE id=2");
  while($rowdata=mysqli_fetch_array($sq))
  {
	   $headingtxt2=$rowdata['heading'];
	   $txtvalue4=$rowdata['txt1'];
	   $txtvalue5=$rowdata['txt2'];
	   $txtvalue6=$rowdata['txt3'];
  }
  
		$headingtxt3;
		$txtvalue7 ;
		$txtvalue8 ;
		$txtvalue9;
  
  $sq=mysqli_query($db, "SELECT * FROM `tab` WHERE id=3");
  while($rowdata=mysqli_fetch_array($sq))
  {
	   $headingtxt3=$rowdata['heading'];
	   $txtvalue7=$rowdata['txt1'];
	   $txtvalue8=$rowdata['txt2'];
	   $txtvalue9=$rowdata['txt3'];
  }
        $timehd;
	 	$time1;
		$time2;
		$time3;
		$weather;
  
  $sq=mysqli_query($db, "SELECT * FROM `pray_tim` WHERE id=1");
  while($rowdata=mysqli_fetch_array($sq))
  { 
       $timehd=$rowdata['heading'];
	   $time1=$rowdata['time1'];
	   $time2=$rowdata['time2'];
	   $time3=$rowdata['time3'];
	   $weather=$rowdata['weather_code'];
  }
      
	  $marque;
	  
  $sq=mysqli_query($db, "SELECT * FROM `animate` WHERE id=1");
  while($rowdata=mysqli_fetch_array($sq))
  {
	   $marque=$rowdata['marquee'];
	   
  }
  
  
  
  
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Slider</title>
<link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="CssFiles/AppCss.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
 </head>

<body>
<input type="hidden" id="weather" value="<?php echo $weather; ?>">
<section class="bgClass resolution">
    <div class="overflow-hidden p-l-7">
		<div class="PictureSliiderRes float_left border m-t-7">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators" style="display:none">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>    
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner nav-space" role="listbox">
        <div class="item active">
          <img style="margin: auto;" src="images/img_1.jpg" class="width_100P">
        </div>
    
        <div class="item">
          <img style="margin: auto;" src="images/img_2.jpg" class="width_100P">
        </div>
    
        <div class="item">
          <img style="margin: auto;" src="images/img_3.jpg" class="width_100P">
        </div>
    
        <div class="item">
          <img style="margin: auto;" src="images/img_4.jpg" class="width_100P sliderImageHeight">
        </div>
    
        <div class="item">
          <img style="margin: auto;" src="images/img_6.jpg" class="width_100P sliderImageHeight">
        </div> 
        
        <div class="item">
          <img style="margin: auto;" src="images/img_5.jpg" class="width_100P sliderImageHeight">
        </div>
       <div class="item">
          <img style="margin: auto;" src="images/img_7.jpg" class="width_100P sliderImageHeight">
        </div>

    
        <div class="item">
          <img style="margin: auto;" src="images/img_1.jpg" class="width_100P sliderImageHeight">
        </div>

      </div>
    
      <!-- Left and right controls -->
     <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>-->
    </div>
    <!-- End Crouser -->

        </div>
        <div class="float_left m-l-10">
        	<div class="weatherBoxRes float_left border m-t-7 p-l-5">
            <div id="test"></div>
            	<!--<div class="weathterBoxFont">Weather</div>
                <div class="weathterBoxFont">for zipcode</div>
                <div class="weathterBoxFont">60139</div>-->
            </div>
            <div class="NamazBoxRes float_left border m-t-7 m-l-10">
                <div class="headingBoxFont"><?php echo $timehd; ?></div>
            	<div class="NamazBoxFont" style="margin-top:21px;"><?php echo $time1; ?></div>
                <div class="NamazBoxFont"><?php echo $time2; ?></div>
                <div class="NamazBoxFont"><?php echo $time3; ?></div>            
            </div><br>
            <div class="headingBoxRes float_left border m-t-7 headingBoxFont p-l-5"><?php echo $headingtxt1; ?></div><br>
            <div class="contentBoxRes float_left border m-t-7 p-l-5">
            	<div class="NamazBoxFont m-t-30"><?php echo $txtvalue1; ?></div>
                <div class="NamazBoxFont"><?php echo $txtvalue2; ?></div>
                 <div class="NamazBoxFont"><?php echo $txtvalue3; ?></div>
            </div><br>
            <div class="headingBoxRes float_left border m-t-7 headingBoxFont p-l-5"><?php echo $headingtxt2; ?></div><br>
            <div class="contentBoxRes float_left border m-t-7 p-l-5">
            	<div class="NamazBoxFont m-t-30"><?php echo $txtvalue4; ?></div>
                <div class="NamazBoxFont"><?php echo $txtvalue5; ?></div>
                 <div class="NamazBoxFont"><?php echo $txtvalue6; ?></div>            
            </div><br>
            <div class="headingBoxRes float_left border m-t-7 headingBoxFont p-l-5"><?php echo $headingtxt3; ?></div><br>
            <div class="contentBoxRes float_left border m-t-7 p-l-5">
            	<div class="NamazBoxFont m-t-30"><?php echo $txtvalue7; ?></div>
                <div class="NamazBoxFont"><?php echo $txtvalue8; ?></div>
                 <div class="NamazBoxFont"><?php echo $txtvalue9; ?></div>            
            </div>             
           
        </div>  
    </div>
    <div class="m-t-14">

<marquee class="font-50"><?php echo $marque; ?></marquee><!-- /slider -->    
    </div>
</section>
<section><div class="text-xs-center" style="width:1920px"><a href="http://chicagoitprojects.com/" target="_blank">SOFTWARE & WEBSITE DEVELOPMENT WWW.CHICAGOITPROJECTS.COM &nbsp;&nbsp;&nbsp;&nbsp; 708-792-3214 </a></div></section>


<script type="text/javascript" src="JavaScriptFile/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/js/jquery.bxSlider.js"></script>
<script type="text/javascript" src="JavaScriptFile/AppJavascript.js"></script>

<script type="text/javascript">
(function(h) {
    h.fn.weatherfeed = function(q, f, w) {
        f = h.extend({
            unit: "c",
            image: !0,
            country: !1,
            highlow: !0,
            wind: !0,
            humidity: !1,
            visibility: !1,
            sunrise: !1,
            sunset: !1,
            forecast: !1,
            link: !0,
            showerror: !0,
            linktarget: "_self",
            woeid: !1,
            refresh: 0
        }, f);
        var m = "odd";
        return this.each(function(p, s) {
            function x(f, c, e) {
                m = "odd";
                k.html("");
                h.ajax({
                    type: "GET",
                    url: c,
                    dataType: "json",
                    success: function(a) {
                        if (a.query) {
                            if (0 < a.query.results.channel.length)
                                for (var c = a.query.results.channel.length, b = 0; b < c; b++) y(s, a.query.results.channel[b],
                                    e);
                            else y(s, a.query.results.channel, e);
                            h.isFunction(w) && w.call(this, k)
                        } else e.showerror && k.html("<p>Weather information unavailable</p>")
                    },
                    error: function(a) {
                        e.showerror && k.html("<p>Weather request failed</p>")
                    }
                })
            }
            var k = h(s);
            k.hasClass("weatherFeed main_bg") || k.addClass("weatherFeed main_bg");
            if (!h.isArray(q)) return !1;
            var t = q.length;
            10 < t && (t = 10);
            var l = "";
            for (p = 0; p < t; p++) "" != l && (l += ","), l += "'" + q[p] + "'";
            now = new Date;
            var u = "select * from weather.forecast where " + (f.woeid ? "woeid" : "location") + " in (" + l + ") and u='" + f.unit +
                "'",
                z = "http://query.yahooapis.com/v1/public/yql?q=" + encodeURIComponent(u) + "&rnd=" + now.getFullYear() + now.getMonth() + now.getDay() + now.getHours() + "&format=json&callback=?";
            x(u, z, f);
            0 < f.refresh && setInterval(function() {
                x(u, z, f)
            }, 6E4 * f.refresh);
            var y = function(f, c, e) {
                    f = h(f);
                    if ("Yahoo! Weather Error" != c.description) {
                        var a = c.wind.direction;
                        348.75 <= a && 360 >= a && (a = "N");
                        0 <= a && 11.25 > a && (a = "N");
                        11.25 <= a && 33.75 > a && (a = "NNE");
                        33.75 <= a && 56.25 > a && (a = "NE");
                        56.25 <= a && 78.75 > a && (a = "ENE");
                        78.75 <= a && 101.25 > a && (a = "E");
                        101.25 <=
                            a && 123.75 > a && (a = "ESE");
                        123.75 <= a && 146.25 > a && (a = "SE");
                        146.25 <= a && 168.75 > a && (a = "SSE");
                        168.75 <= a && 191.25 > a && (a = "S");
                        191.25 <= a && 213.75 > a && (a = "SSW");
                        213.75 <= a && 236.25 > a && (a = "SW");
                        236.25 <= a && 258.75 > a && (a = "WSW");
                        258.75 <= a && 281.25 > a && (a = "W");
                        281.25 <= a && 303.75 > a && (a = "WNW");
                        303.75 <= a && 326.25 > a && (a = "NW");
                        326.25 <= a && 348.75 > a && (a = "NNW");
                        var g = c.item.forecast[0];
                        wpd = c.item.pubDate;
                        n = wpd.indexOf(":");
                        tpb = v(wpd.substr(n - 2, 8));
                        tsr = v(c.astronomy.sunrise);
                        tss = v(c.astronomy.sunset);
                        daynight = tpb > tsr && tpb < tss ? "day" : "day";
                        var b = '<div class="whater ' + m + " " + daynight + '"';
                      //  e.image && (b += ' style="background-image: url(http://l.yimg.com/a/i/us/nws/weather/gr/' + c.item.condition.code + daynight.substring(0, 1) + '.png); background-repeat: no-repeat;"');http://l.yimg.com/a/i/us/nws/weather/gr
 e.image && (b += ' style="background-image: url(img/icons/' + c.item.condition.code +daynight.substring(0, 1) +'.png);" >');
                       // b = b + ">" + 
						//	('');
                        //e.country && (b += '<div class="weatherCountry">' + c.location.country + "</div>");
                        b += '<div class="weatherTemp">' + c.item.condition.temp + "&deg;</div>";
                        b += '<div class="weatherDesc">' + c.item.condition.text + "</div>";
                       /* e.highlow &&
                            (b += '<div class="weatherRange"><div class="high2" >' +g.high + "&deg;</div><div class='low2' >" +g.low + "&deg;</div></div>");*/
                        e.wind && (b += '<div class="weatherWind">Wind: ' + a + " " + c.wind.speed + c.units.speed + "</div>");
                        e.humidity && (b += '<div class="weatherHumidity">Humidity: ' + c.atmosphere.humidity + "</div>");
                        e.visibility && (b += '<div class="weatherVisibility">Visibility: ' + c.atmosphere.visibility + "</div>");
                        e.sunrise && (b += '<div class="weatherSunrise">Sunrise: ' + c.astronomy.sunrise + "</div>");
                        e.sunset && (b += '<div class="weatherSunset">Sunset: ' + c.astronomy.sunset +
                            "</div>");
					    e.link && (b += '<div class="weatherLink"><a href="' + c.link + '" target="' + e.linktarget + '" title="Read full forecast">Full forecast</a></div>')
                    } else b = '<div class="weatherItem ' + m + '">', b += '<div class="weatherError">City not found</div>';
                    b += "</div>";
                    m = "odd" == m ? "even" : "odd";
                    f.append(b)
                },
                v = function(f) {
                    d = new Date;
                    return r = new Date(d.toDateString() + " " + f)
                }
        })
    }
})(jQuery);


$(document).ready(function () {
	
	var code=document.getElementById("weather").value;
	$('#test').weatherfeed([code],{
	//$('#test').weatherfeed([''],{
	//$('#test').weatherfeed(['JAXX0085'],{
		
		unit: 'c',
		image: true,
		country: true,
		highlow: true,
		wind: false,
		humidity: false,
		visibility: false,
		sunrise: false,
		sunset: false,
		forecast: true,
		link: false
	});
});
</script>
</body>
</html>
