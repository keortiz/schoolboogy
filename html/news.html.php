<style>
/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #abcfed;
    width: 40%;
    height: 280px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    	font-size: 13px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #246aa8;
    color: white;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #4291d7;
    color: white;
    font-size: 102%;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 435px;
    border-left: none;
    height: 280px;
    margin: 0px;
    color: black;
	font-family: Century Gothic, sans-serif;
	font-size: 13.4px;
	font-weight: 100;
}

hr {
	border-width: 2px;
	border-color: #246aa8;
}
</style>


<div class="cheader">NEWS</div>	
<div id="featurelogo"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  FEATURE</div>

<div id="feature">
	

		<?php
			foreach ($news as $news1)
				{
					echo '<h3 id="fheader">' . $news1['news_headline'] . '</h3><br>';
					echo $news1['news_content'];	
					echo '<hr>';					
				}
		?>	


</div>




<div id="news">
	<div id="highlights"><div id="highlightslogo"><i class="fa fa-eye" aria-hidden="true"></i>  HIGHLIGHTS</div>
		<div class="tab">
  			<button class="tablinks" onclick="openCity(event, 'London')"><?php echo $highlights[0]['news_headline']; ?></button>
  			<button class="tablinks" onclick="openCity(event, 'Paris')"><?php echo $highlights[1]['news_headline']; ?></button>
  			<button class="tablinks" onclick="openCity(event, 'Tokyo')"><?php echo $highlights[2]['news_headline']; ?></button>
  			<button class="tablinks" onclick="openCity(event, 'Boston')"><?php echo $highlights[3]['news_headline']; ?></button>
		</div>

		<div id="London" class="tabcontent">
  			<h3><?php echo $highlights[0]['news_headline']; ?></h3>
  			<p><?php echo $highlights[0]['news_content']; ?></p>
  			<p><?php echo $highlights[0]['news_link']; ?></p>  			
		</div>

		<div id="Paris" class="tabcontent">
  			<h3><?php echo $highlights[1]['news_headline']; ?></h3>
  			<p><?php echo $highlights[1]['news_content']; ?></p> 
  			<p><?php echo $highlights[1]['news_link']; ?></p>  			
		</div>

		<div id="Tokyo" class="tabcontent">
  			<h3><?php echo $highlights[2]['news_headline']; ?></h3>
  			<p><?php echo $highlights[2]['news_content']; ?></p>
  			<p><?php echo $highlights[2]['news_link']; ?></p>  			
		</div>  

		<div id="Boston" class="tabcontent">
 			<h3><?php echo $highlights[3]['news_headline']; ?></h3>
 			<p><?php echo $highlights[3]['news_content']; ?></p>
  			<p><?php echo $highlights[3]['news_link']; ?></p> 			
		</div>
</div>	


<div id="feedlogo"><i class="fa fa-rss" aria-hidden="true"></i>  NEWS FEED</div>
<div id="feed">

<div id="feedtitle">
		<?php
			foreach ($feeds as $feeds1)
				{
					echo '<h3 id="fheader">' . $feeds1['news_headline'] . '</h3><br>';
					echo $feeds1['news_content'] , '<br>';	
					echo $feeds1['news_link'] , '<hr>';					
				}
		?>	

</div>
</div>	
</div>
