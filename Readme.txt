---Installation--- 

1- Add the following script to the <head> element of the page:

<link rel="stylesheet" type="text/css" href="NIFVstyle.css" />
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/connection/connection-min.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/json/json-min.js"></script>
<script type="text/javascript" src="NIFVjavascript.js"></script>

2- Add the following <div> tag to the part of the page that the NIF navigator will appear. 

<div id="NIFVmain">
</div>	

3- Call the function LoadNIFV(string) to load the navigator. For example:

<input type="submit" value="Search" onclick="LoadNIFV('Cerebellum')" />




