<html lang='en'>
	<head>
		<script type="text/javascript">
			//  MS Internet Explorer must not be given a chance to fail before I can give the user an error message.
			try {
				var msie = window.navigator.userAgent.indexOf("MSIE ");
				if (msie>0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){ // If MSIE or IE 11
					alert("Internet Explorer is not supported.\n\nPlease consider using Microsoft Edge or Google Chrome instead\n\nYou will be forwarded to the download page for MS Edge now.");
					console.error("INTERNET EXPLORER IS EVIL");
					document.write("Internet Explorer is not supported");
					window.location = "https://www.microsoft.com/edge";
				}
			} catch(e){
				console.error(e);
			}
		
		</script>
		<style>
			html {
				background-color: #0000;
				transition: opacity .1s linear;
			}
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
		<meta content="utf-8" http-equiv="encoding" />
		<meta name="copyright" content="&copy; 2024 Steve Seguin" />
		<meta name="license" content="https://github.com/steveseguin/vdo.ninja/LICENSE.md" />
		<meta name="sourcecode" content="https://github.com/steveseguin/vdo.ninja" />
		<meta name="stance-on-war" content="Steve Seguin condemns Russia's brutal invasion of Ukraine 💙💛." />
		
		<!-- Primary Meta Tags -->
		<title>CoP.Ninja</title>
		<meta id="metaTitle" name="title" content="CoP.Ninja" />
		<meta name="description" content="Bring live video from your smartphone, computer, or friends directly into your Studio. 100% free." />
		<meta name="author" content="Steve Seguin" />
		
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="theme-color" content="#0f131d" />
		
		<link rel="stylesheet" href="./css/variables.css?ver=2" />
		<!-- If a user is using an old custom main.css, their custom variables should override the defaults variables this way. i think. -->
		<link rel="stylesheet" href="./css/main.css?ver=394" />
		<link rel="stylesheet" href="./css/icons.css?ver=1" />
		<link rel="stylesheet" href="./css/animations.css" />
		<script type="text/javascript" crossorigin="anonymous" src="./thirdparty/adapter.js"></script>
	    <link rel="stylesheet" href="./css/newmain.css">
	
		<link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon" />
		<link id="favicon1" rel="icon" type="image/png" sizes="32x32" href="./media/favicon-32x32.png" />
		<link id="favicon2" rel="icon" type="image/png" sizes="16x16" href="./media/favicon-16x16.png" />
		<link id="favicon3" rel="icon" href="./media/favicon.ico" />
		<link id="thumbnailUrl" itemprop="thumbnailUrl" href="./media/vdoNinja_logo_full.png" />
		
		<!-- Open Graph / Facebook -->
		<meta property="og:site_name" content="VDO.Ninja" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://vdo.ninja/" />
		<meta property="og:title" content="VDO.Ninja" />
		<meta property="og:description" content="Bring live video from your smartphone, computer, or friends directly into Studio. 100% free." />
		<meta property="og:image" itemprop="image" content="https://vdo.ninja/media/vdoNinja_logo_full.png" />
		<meta name="msapplication-TileImage" content="./media/vdoNinja_logo_full.png" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="630" />
		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image" />
		<meta property="twitter:url" content="https://vdo.ninja/" />
		<meta property="twitter:title" content="VDO.Ninja" />
		<meta property="twitter:description" content="Bring live video from your smartphone, computer, or friends directly into OBS Studio. 100% free." />
		<meta property="twitter:image" content="./media/vdoNinja_logo_full.png" />

		<style id="lightbox-animations" type="text/css"></style>
		
		<!-- Until Chrome v115 ends ; pip2 -->
		<meta http-equiv="origin-trial" content="AoalTVyEOoiQninAV09SzviYaAtRKuTfDIsMUNQLIg1/+ZWOpXEFOL+GQGqkQzkkszPrK26oGzB1hIF3beHJjAMAAABeeyJvcmlnaW4iOiJodHRwczovL3Zkby5uaW5qYTo0NDMiLCJmZWF0dXJlIjoiRG9jdW1lbnRQaWN0dXJlSW5QaWN0dXJlQVBJIiwiZXhwaXJ5IjoxNjk0MTMxMTk5fQ==">
		
		<!-- Until Chrome v117 ends ; blur -->
		<meta http-equiv="origin-trial" content="Aqwjtr1IS9AdkcWCFAOHtMMmsKDy8Ti58hQBbHkR/HnloiMhkW17cYgnkiLgOH9zuTDC/o4GquQ0MHe9tqT51wcAAABdeyJvcmlnaW4iOiJodHRwczovL3Zkby5uaW5qYTo0NDMiLCJmZWF0dXJlIjoiTWVkaWFDYXB0dXJlQmFja2dyb3VuZEJsdXIiLCJleHBpcnkiOjE2OTg5Njk1OTl9">
		
	</head>
	<body id="main" class="main hidden" onload="main()">
		<div class="papa">
			<div class="mommy">
				<div class="daddy"><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span><span class="ospano"></span>
				</div>
			</div>
		</div>
			
		<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
			<link itemprop="url" href="./media/vdoNinja_logo_full.png" />
		</span>
		<link itemprop="thumbnailUrl" href="./media/vdoNinja_logo_full.png" />
		<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
			<link itemprop="url" href="./media/vdoNinja_logo_full.png" />
		</span>
		
		<script type="text/javascript" crossorigin="anonymous"  src="./thirdparty/CodecsHandler.js?ver=18"></script>
		<script type="text/javascript" crossorigin="anonymous" src="./thirdparty/aes.js"></script>
		<script type="text/javascript" crossorigin="anonymous" src="./webrtc.js?ver=813"></script>
		<input id="zoomSlider" type="range" style="display: none;" />
		<span id="electronDragZone" style="pointer-events: none; z-index:-10; position:absolute;top:0;left:0;width:100%;height:2%;-webkit-app-region: drag;min-height:20px;"></span>
		<div id="header">
			
			<a id="logoname" href="./" style="text-decoration: none; color: white; margin: 0 2px 0px 8px;">
				<span data-translate="logo-header">
					<span id="qos">C</span>oP.Ninja 
				</span>
			</a>
			<div id="head1">
				<input type="text" autocorrect="off" autocapitalize="none" id="joinroomID" name="joinroomID" tabindex="1" size="22" placeholder="Join by Room Name here" alt="Enter a room name to join" title="Enter a room name to quick join" onkeyup="jumptoroom(event)"/>
				<button onclick="jumptoroom();" id='jumptoroomButton' role="button" aria-pressed="false" tabindex="1" alt="Join room" title="Join room" >GO</button>
			</div>
			<div id="head1a" class="hidden">
				<input type="text" autocorrect="off" autocapitalize="none" id="joinbyURL" name="joinbyURL" size="22" placeholder="Load a website URL" alt="Enter the URL to load" title="Enter the URL to load"/>
				<button onclick="jumptoURL(event)"  role="button" aria-pressed="false" alt="Load URL" title="Load URL" >Load URL</button>
			</div>
			<div id="head5" class="hidden"></div>
			<div id="head3" style="display: inline-block;" class="hidden">
				<span style="color: #888;" id="copythisurl" tabindex="1" > &nbsp; 
					<span data-translate="copy-this-url">Copy this URL into an OBS "Browser Source"</span> <i style="color: #CCC;" class="las la-long-arrow-alt-right"></i> &nbsp; 
				</span>
			</div>
			<div id="head3a" style="display: inline-block;" class="hidden">
				<a
					id="reshare"
					data-drag="1"
					onclick="copyFunction(this, event)"
					class="task grabLinks"
					data-menu="context-menu"
					style="font-weight: bold; color: #afa !important; cursor: grab; background-color: #0000;  font-size: 115%; min-width: 335px; max-width: 800px;"
				></a>
				<i class="las la-paperclip" style="color: #DDD;" title="Copy link to clipboard" onclick="copyFunction(document.getElementById('reshare'), event);" onmouseover="this.style.cursor='pointer'"></i>
				<span title="Save and ask to reload the current page on next site visit" style='font-size:92%;' onclick="saveRoom(this);" onmouseover="this.style.cursor='pointer'">💾</span>
			</div>
			<div id="head4" style="display: inline-block;" class="hidden">
				<span style="font-size: 68%; color: white;">
					<span data-translate="you-are-in-the-control-center">Control panel for room:</span>
					
					<div id="dirroomid" style="font-size: 140%; color: #99c; display: inline-block;"></div>
					<span id="saveRoom" onclick="saveRoom(this)" style='cursor:pointer;margin-left:10px;' title="Will remember the room, prompting you the next time you visit if you wish to load this director's room again">💾</span>
					<span id="togglePreviewMode" onclick="switchModes()" style='cursor:pointer;margin-left:2px;' title="Toggle between the director control-room view and a scene preview-mode.">🕹️</span>
				</span>
			</div>
			<div id="head2" class="hidden" style="display: inline-block; text-decoration: none; font-size: 60%; color: white;">
				<span data-translate="joining-room">You are in the room</span>:
				<div id="roomid" style="display: inline-block;"></div>
			</div>
			<div id="head6" class="hidden" data-translate="only-director-can-hear-you">Only the director can hear you currently.</div>
			<div id="head7" class="hidden" data-translate="director-muted-you">The director has muted you.</div>
			<div id="head8" class="hidden" data-translate="director-video-muted-you">The director has disabled your camera temporarily.</div>
		</div>
		<div id="obsState" class="hidden" >ACTIVE</div>
		<div id="chatModule" class="hidden">
			<div class="chat-header">
				<span>Chat</span>
    			<a href="javascript:void(0);" onclick="openYTChatInNewWindow()"><i class="lab la-youtube"></i>YT-Chat</a>

				<span>
					<a id="popOutChat" onclick="createPopoutChat();"><i class="las la-external-link-alt"></i></a>
					<a id="closeChat" onclick="toggleChat();">x</i></a>
				</span>
			</div>
			
			<div id="chatBody" class="resizable-div">
				<!-- Chat messages will be inserted here -->
			</div>
			<div class="chat-input-area">
				<input type="text" id="chatInput" placeholder="Enter chat message to send" onkeypress="EnterButtonChat(event)" />
				<button class="chatBarInputButton" onclick="sendChatMessage()">Send</button>
				<button onclick="toggleFileshare()"><i class="las la-file-upload"></i></button>
			</div>
			<div class="resizer"></div>
		</div>
		<div id="activeShares"></div>
		<div id="controlButtons" class="hidden">
			<div class="controlPositioning">
                <div id="subControlButtons">
                
					<div id="mediafileshare" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Stream a media file" aria-label="Stream a media file" alt="Stream a media file to others" onclick="getById('fileselector2').click();" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden" style="cursor: pointer;">
                        <i id="mediafilesharetoggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las la-file-video"></i>
						<input id="fileselector2" class="hidden" onchange="session.changePublishFile(this,event);" type="file" accept="video/*,audio/*" alt="Hold CTRL (or CMD) to select multiple files" title="Hold CTRL (or CMD) to select multiple files" multiple/>
                    </div>
				
                    <div id="blindAllGuests" title="Blind all guests in room (toggle)" alt="Blind all guests in room (toggle)" aria-label="Blind all guests in room" onmousedown="event.preventDefault(); event.stopPropagation();"  onclick="blindAllGuests(this, event)"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="hidden float" style="cursor: pointer;" >
                        <i class="toggleSize las la-eye"></i>
                    </div>
                
                    <div id="queuebutton" title="Load the next guest in queue" alt="Load the next guest in queue"  aria-label="Load next guest in queue" onmousedown="event.preventDefault(); event.stopPropagation();"  onclick="nextQueue()"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="hidden float" style="cursor: pointer;" >
                        <i id="queuetoggle" class="toggleSize las la-stream"></i>
                        <div id="queueNotification"></div>
                    </div>
                    <div id="sharefilebutton" title="Transfer any file to the group" alt="Transfer any file to the group" aria-label="Select file to transfer" onmousedown="event.preventDefault(); event.stopPropagation();"  onclick="toggleFileshare()"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden" style="cursor: pointer;display:none!important;" >
                        <i id="filesharetoggle" class="toggleSize las la-file-upload"></i> 
                        <div id="transferNotification"></div>
                    </div>
                    <div id="chatbutton" title="Toggle the Chat" alt="Toggle the Chat" aria-label="Text chat" onmousedown="event.preventDefault(); event.stopPropagation();"  onclick="toggleChat()"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="hidden float" style="cursor: pointer;" >
                        <i id="chattoggle" class="toggleSize las la-comment-alt"></i>
                        <div id="chatNotification"></div>
                    </div>
                    <div id="ytchat" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Popout Youtube Chat"  class="hidden float"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" alt="Popout Youtube Chat" aria-label="Popout Youtube Chat">
                        <a href="javascript:void(0);" onclick="openYTChatInNewWindow()"><i id="settingstoggle" class="toggleSize lab la-youtube"></i></a>
                    </div>
                    <div id="mutespeakerbutton" onmousedown="event.preventDefault(); event.stopPropagation();" alt="Toggle the speaker output." aria-label="Mute Speaker output" title="Mute the Speaker (ALT + A)" onclick="toggleSpeakerMute()"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="hidden float" style="cursor: pointer;" >
                        <i id="mutespeakertoggle" class="toggleSize las la-volume-up" style="position: relative; top: 0.5px;"></i>
                    </div>
                    <div id="mutebutton" onmousedown="toggleMute(false, event);event.preventDefault(); event.stopPropagation();" data-translate="mute-the-mic" title="Mute the Mic (CTRL/⌘ + M)" alt="Mute the Mic" aria-label="Mute Microphone" ontouchstart="toggleMute(false, event);event.preventDefault(); event.stopPropagation();" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="hidden float" style="cursor: pointer;">
                        <i id="mutetoggle" class="toggleSize las la-microphone" style="position: relative; top: 0.5px;"></i>
                    </div>
                    <div id="mutevideobutton" onmousedown="event.preventDefault(); event.stopPropagation();" data-translate="disable-the-camera" title="Disable the Camera (CTRL/⌘ + B)" alt="Disable the Camera" aria-label="Mute Camera" onclick="toggleVideoMute()"   tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="hidden float" style="cursor: pointer;">
                        <i id="mutevideotoggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las la-video"></i>
                    </div>
                    <div id="screensharebutton" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Share a Screen with others" alt="Share a Screen with others" aria-label="Share a screen" onclick="screenshareTypeDecider(1)" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden task" data-menu="context-menu-screen-share" style="cursor: pointer;">
                        <i id="screensharetoggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las la-desktop"></i>
                    </div>
                    <div id="screenshare2button" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Add a Screen Share" alt="Add a Screen Share" aria-label="Share a screen"  onclick="screenshareTypeDecider(2)" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden task" data-menu="context-menu-screen-share"  style="cursor: pointer;">
                        <i id="screenshare2toggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las  la-tv"></i>
                    </div>
                    <div id="screenshare3button" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Share a Screen with others" alt="Add a Screen Share" aria-label="Share a screen"  onclick="screenshareTypeDecider(3)" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden task" data-menu="context-menu-screen-share"  style="cursor: pointer;">
                        <i id="screenshare3toggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las  la-tv"></i>
                    </div>
                    <div id="websitesharebutton" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Share a website with your guests (IFRAME)" aria-label="Share a website" alt="Share a website with your guests (IFRAME)" onclick="shareWebsite(false, event)" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden" style="cursor: pointer;">
                        <i id="websitesharetoggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las la-window-maximize"></i>
                    </div>
                    <div id="websitesharebutton2" onmousedown="event.preventDefault(); event.stopPropagation();" title="Hold CTRL (or CMD) and click to spotlight this video" alt="Share a website as an embedded iFRAME" aria-label="Share a website" onclick="shareWebsite(false, event)" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" class="float2 orange shake hidden" style="cursor: pointer;max-width: 200px;margin: auto;padding: 0 10px;">
                        <i onmousedown="event.preventDefault(); event.stopPropagation();" class="toggleSize las la-window-close" style="display: inline-block;"></i>
                        <div style="display: inline-block;width: 85px;line-height: 1; font-size: 0.9em; background-color: unset;box-shadow: unset;">
                            Stop Sharing Website
                        </div>
                    </div>
                    <div id="fullscreenPage" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Full-screen the page" alt="Full-screen the page" aria-label="Full screen"  onclick="fullscreenPageToggle()" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden" style="cursor: pointer;">
                        <i id="fullscreenPageToggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las la-expand-arrows-alt"></i>
                    </div>
					<div id="PictureInPicturePage" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Picture-in-Picture the video mix" alt="Picture-in-Picture the page" aria-label="Picture-in-Picture"  onclick="PictureInPicturePageToggle()" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);"  class="float hidden" style="cursor: pointer;">
                        <i id="PictureInPicturePageToggle" onmousedown="event.preventDefault(); event.stopPropagation();"  class="toggleSize las la-external-link-square-alt"></i>
                    </div>
                    <div id="flipcamerabutton" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Cycle the Cameras"  onclick="cycleCameras()" class="hidden float"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" aria-label="Cycle Cameras" alt="Cycle the Cameras">
                        <i id="settingstoggle" class="toggleSize las la-sync-alt"></i> 
                    </div>
					
					 <div id="blackoutmode" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Enter black-out mode"  onclick="blackoutMode()" class="float hidden"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" aria-label="Black out mode" alt="Enter black-out mode">
                        <i id="blackouttoggle" class="toggleSize las la-moon"></i> 
                    </div>
					
                    <div id="obscontrolbutton" onmousedown="event.preventDefault(); event.stopPropagation();"  title="OBS Remote Controller; start/stop and change scenes." onclick="toggleOBSControls();" class="hidden float"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" aria-label="Remote OBS control menu" alt="Toggle the Remote OBS Controls Menu">
                        <i id="obscontroltoggle" class="toggleSize las la-gamepad"></i>
                    </div>
                    
                    <div id="roomsettingsbutton" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Room Settings" onclick="toggleRoomSettings();" class="hidden float"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" alt="Toggle the Room Settings Menu" aria-label="Room settings menu">
                        <i id="roomsettingstoggle" class="toggleSize las la-users-cog"></i>
                    </div>
                    
                    <div id="settingsbutton" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Your audio and video Settings"  onclick="toggleSettings()" class="hidden float"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" alt="Toggle Settings Menu" aria-label="Settings menu">
                        <i id="settingstoggle" class="toggleSize las la-cog"></i>
                    </div>
                    
                    <div id="hangupbutton"  onmousedown="event.preventDefault(); event.stopPropagation();" title="Hangup the Call" aria-label="Hang up" alt="Hangup the Call" onclick="hangup()" class="hidden float"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" >
                        <i class="toggleSize las la-phone rotate225" aria-hidden="true"></i>
                    </div>
                    <div id="raisehandbutton" onmousedown="event.preventDefault(); event.stopPropagation();"  data-raised="0" title="Alert the host you want to speak"  aria-label="Raise hand" alt="Alert the host you want to speak" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" onclick="raisehand()" class="hidden float" style="cursor: pointer;">
                        <i class="toggleSize las la-hand-paper" style="position: relative; right: 1px;" aria-hidden="true"></i>
                    </div>
                    
                    <div id="pptbackbutton" onmousedown="event.preventDefault(); event.stopPropagation();" title="Go back a slide" aria-label="Back a slide" alt="Go back a slide" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" onclick="gobackSlide()" class="hidden float red" style="cursor: pointer;">
                        <i class="toggleSize las la-chevron-left" style="position: relative; right: 1px;" aria-hidden="true"></i>
                    </div>
                    <div id="pptnextbutton" onmousedown="event.preventDefault(); event.stopPropagation();" title="Next slide" aria-label="Next slide" alt="Next slide" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" onclick="nextSlide()" class="hidden float" style="cursor: pointer;">
                        <i class="toggleSize las la-chevron-right" style="position: relative; right: 1px;" aria-hidden="true"></i>
                    </div>
                    
                    <div id="recordLocalbutton" onmousedown="event.preventDefault(); event.stopPropagation();"  data-state="0" title="Record your stream to disk" aria-label="Record your stream to disk" alt="Record your stream to disk" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" onclick="recordLocalVideoToggle();" class="hidden float" style="cursor: pointer;">
                        <i class="toggleSize las la-dot-circle" style="position: relative;" aria-hidden="true"></i>
                    </div>
                    <div id="recordLocalScreenbutton" onmousedown="event.preventDefault(); event.stopPropagation();"  data-state="0" title="Stop screen share recording" aria-label="Stop screen share recording" alt="Stop screen recording" tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" onclick="recordLocalScreenStopRecord();" class="hidden float" style="cursor: pointer;">
                        <small>Stop<br>Screen<br>Record</small>
                    </div>
                    <span id="miniPerformer" style="pointer-events: auto;" class="hidden"></span>
                    <span id="rooms" class="hidden" style="padding-top:3px;padding-left:6px;pointer-events: auto;color:#fff;"></span>
                    <span id="groups" class="hidden" style="padding-top:3px;padding-left:6px;pointer-events: auto;color:#fff;text-align: center;"></span>
                    <div id="hangupbutton2" onmousedown="event.preventDefault(); event.stopPropagation();"  title="Cancel the Director's Video/Audio"  onclick="hangup2()" class="hidden float"  tabindex="2" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" style="cursor: pointer;" aria-label="stop publishing audio and video" alt="Disconnect Direcotor's cam">
                        <i class="toggleSize las la-phone rotate225" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
		</div>
		<span id="miniTaskBar" style="float: right; bottom: 0px;right:0; position:fixed; display:flex;">
			<div id="closedList_connectUsers" class="hidden"  onclick="getById('connectUsers').classList.remove('hidden');getById('closedList_connectUsers').classList.add('hidden');">
				<i class="las la-theater-masks"></i>
			</div>
			<span
					id="reportbutton"
					title="Submit any error logs" 
					onclick="submitDebugLog();"
					style="cursor: pointer;z-index:3;display:none;"
					class="hidden"
					role="button" 
					tabindex="3"
				>
				<i style="cursor: pointer; color: #d9e4eb; padding: 2px; margin: 2px 2px 0 0; font-size: 140%;" class="las la-bug" aria-hidden="true"></i>
			</span>
			<span
					id="helpbutton"
					title="Show help contact info" 
					onclick="warnUser('For support, please browse https://reddit.com/r/vdoninja or join the live chat on Discord at https://discord.vdo.ninja.\n\nThe Docs also contains many help guides and advanced settings, located at https://docs.vdo.ninja.\n\nTo access the video stats menu, hold CTRL (command) and Left-Click on a video. Most video issues can be fixed by using Wired Internet instead of Wi-Fi.')"
					style="cursor: pointer; display:none;"
					alt="How to Use This with OBS"
					role="button" 
					tabindex="3"
				>
				<i style="cursor: pointer;  color: #d9e4eb; padding: 2px; margin: 2px 2px 0 0; font-size: 140%;" class="las la-question-circle" aria-hidden="true"></i>
			</span>
			<span title="Language options" onclick="toggle(document.getElementById('languages'));" tabindex="3" role="button" aria-label="language options" aria-pressed="false" id="translateButton">
				<i style="cursor: pointer;color: #d9e4eb; padding: 2px; margin: 2px 2px 0 0; font-size: 140%;" class="las la-language" aria-hidden="true"></i>
			</span>
			<span title="Add to Calendar" onclick="toggle(document.getElementById('calendar'));" tabindex="3" role="button" id="calendarButton">
				<i style="cursor: pointer;  color: #d9e4eb; padding: 2px; margin: 2px 2px 0 0; font-size: 140%;" class="las la-calendar" aria-hidden="true"></i>
			</span>
		</span>
		<div id="mainmenu" class="row" style="opacity: 0;">
			<div id="container-1" title="Add Group Chat to OBS"  alt="Add Group Chat to OBS" tabindex="1" role="button" aria-pressed="false" onkeyup="enterPressedClick(event,this);" class="column columnfade pointer rounded card" style=" overflow-y: auto;">
				
					<h2>
						<span data-translate="add-group-chat">Create a Room</span>
					</h2>
					<div class="container-inner">
						<br />
						<br />
						<span data-translate="rooms-allow-for">Rooms allow for group-chat and the tools to manage multiple guests.</span>
						<br />
						<span class="section">
							<table style="padding-bottom:0;margin-bottom:0;">
							 <tr>
								<th style="text-align:right;" class="labelLarge">
									<b>
									<span data-translate="room-name">Room Name</span>: 
									</b>
								</th>
								<th class="labelSmall"></th>
								<th style="text-align:left;" >
									<div class="labelSmall">
										<b>
											<span data-translate="room-name">Room Name</span>: 
										</b>
									</div>
									<input type="text" autocorrect="off" autocapitalize="none"  id="videoname1" placeholder="Enter a room name here" onkeydown="checkStrengthRoom(event, 'securityLevelRoom');" onchange="checkStrengthRoom(event, 'securityLevelRoom');" onkeyup="enterPressed(event, createRoom);" maxlength="30" style="max-width: 431px;width: 100%;font-size: 110%; padding: 5px;" />
									<button ontouchstart="getById('videoname1').value = session.generateRandomString();getById('securityLevelRoom').style.display='none';" onmousedown="getById('videoname1').value = session.generateRandomString();getById('securityLevelRoom').style.display='none';" title="Generate a random room name" class="randomRoomName"><i class="las la-random"></i></button>
									<div id="securityLevelRoom" style="display:none;margin-top:3px;position:relative;top:3px;font-size:0.8em;"></div>
								</th>
							</tr>
							<tr>
								<th style="text-align:right;" class="labelLarge">
									<b>
										<span data-translate="password-input-field">Password</span>: 
									</b>
								</th>
								<th class="labelSmall"></th>
								<th  style="text-align:left;">
									<div class="labelSmall">
										<b>
											<span data-translate="password-input-field">Password</span>: 
										</b>
									</div>
									<input type="text" autocorrect="off" autocapitalize="none" id="passwordRoom" placeholder="Optional room password here" onkeydown="checkStrengthRoom(event, 'securityLevelRoom');" onchange="checkStrengthRoom(event, 'securityLevelRoom');"  onkeyup="enterPressed(event, createRoom);" style="max-width: 431px;width: 100%;font-size: 110%; padding: 5px;" />
								</th>
							</tr>
							<tr >
							
								<th style="text-align:right; padding: 5px; padding-top: 20px;">
									<input id="broadcastFlag" type="checkbox" title="For large group rooms, this option can reduce the load on remote guests substantially" />
								</th><th style="text-align:left;; padding-top: 20px;">
								<b>
									<span data-translate="guests-only-see-director"  style="cursor: help;" title="For large group rooms, this option can reduce the load on remote guests substantially" >The guests can see the director, but not other guests' videos</span>
								</b>
								</th>	
							</tr>
							<tr>
							
								<th style="text-align:right; padding: 5px;; padding-bottom: 20px;">
									<input id="showdirectorFlag" type="checkbox" title="The director will be visible in scenes as if a performer themselves." />
								</th><th style="text-align:left;; padding-bottom: 20px;">
								<b>
									<span data-translate="scenes-can-see-director" style="cursor: help;" title="If checked, the director can be added to scenes as if a guest. Otherwise, the director will never appear in a scene." >The director will be performing as well, appearing in group scenes</span>
								</b>
								</th>	
							</tr>
							<tr>
								<th style="text-align:right; padding: 5px;">
									
								</th>
								<th style="text-align:left;">
									<b>
										<span data-translate="default-codec-select" title="Which video codec would you want used by default?" >Preferred Video Codec:  </span> 
										<select style="font-size:1.1em" id="codecGroupFlag" type="checkbox" title="For large group rooms, this option can reduce the load on remote guests substantially" >
											<option value="default" selected>Default</option>
											<option value="vp9">VP9</option>
											<option value="h264">H264</option>
											<option value="vp8">VP8</option>
											<option value="av1">AV1</option>
										</select >
									</b>
								</th>
							</tr>
							</table>
							<button onclick="createRoom()"  class="gobutton gowebcam" style="width: 470px;display: block;margin: 20px auto;" alt="Enter the room as the group's director" title="You'll enter as the room's director">
								<span data-translate="enter-the-rooms-control">Enter the room's Control Center in the director's role</span>
							</button>
							<button class="roomnotes" style="display: block;display: block;margin: auto;" onclick="toggle(document.getElementById('roomnotes'),this);">
								<span data-translate="show-tips">Show me some tips..</span>
							</button>
							
							<ul style="max-width: 500px; display: none; text-align: left;" class="roomnotes" id="roomnotes">
								<span data-translate="added-notes" >
									<i>Important Tips:</i>
									<br><br>
									<li>Disabling video sharing between guests will improve performance</li>
									<li>Invite only guests to the room that you trust.</li>
									<li>The "Recording" option is considered experimental.</li>
									<li><a href="https://params.vdo.ninja" style="color:black;"><u>Advanced URL parameters</u></a> are available to customize rooms.</li>
								</span>
							</ul>
						</span>
						
						<span class="section hidden" id="lastSavedRoom">
							<label>A previous session was found using room: <b id="lastSavedRoomName">*UNDEFINED*</b></label>
							<button id="goToLastSavedRoom" style="width: 470px;display: block;margin:5px auto;" class="gobutton gowebcam" alt="Enter the room with the previous room settings" title="Enter director room with previous settings">Load the previous session</button>
						</span>
						
						<span class="section">
							<i data-translate="looking-to-just-chat-and-not-direct">Looking to just chat and not direct?</i>
							<button onclick="jumptoroom2()" class="gobutton gowebcam" style="width: 470px;display: block;margin: 5px auto" alt="Enter the room as the group's director" title="You'll enter as the room's director">
								<span data-translate="join-the-room-basic">Join the room as a Participant, rather than a director</span>
							</button>
						</span>
					</div>
					<div class="outer close">
						<div class="inner">
							<label class="labelclass">
								<span data-translate="back">Back</span>
							</label>
						</div>
					</div>
			</div>
			<div id="container-3"  title="Add your Camera to OBS" onkeyup="enterPressedClick(event,this);"  alt="Add your Camera to OBS" tabindex="1" role="button" aria-pressed="false" class="column columnfade pointer rounded card" onclick="previewWebcam()" style=" overflow-y: auto;">
				<h2 id="add_camera">
					<span data-translate="add-your-camera">Add your Camera to OBS</span>
				</h2>
				<div class="container-inner" id="add_camera_inner">
					<br />
					<p>
						<video id="previewWebcam" class="previewWebcam task" aria-hidden="true" title="Right-click this video for additional options" data-menu="context-menu-video" oncanplay="updateStats();" controlsList="nodownload" muted autoplay playsinline ></video>
					</p>
					<div id="infof"></div>
					<button onclick="this.disabled=true;setTimeout(function(){requestBasicPermissions();},20);" id="getPermissions" style="display:none;" data-ready="false" >
						<span data-translate="ask-for-permissions">Allow Access to Camera/Microphone</span>
					</button>
					<span style="display:block;">
						<button onclick="publishWebcam(this)" title="Start streaming (Alt + s)" aria-label="Start streaming (Alt + s)" role="button" aria-pressed="false" tabindex="1" id="gowebcam" class="gowebcam" alt="Start Streaming  (Alt + s)" disabled data-audioready="false" data-ready="false" >
							<span data-translate="waiting-for-camera">Waiting for Camera to Load</span>
						</button>
					</span>
					<div id="consentWarning" class="startupWarning hidden">
						<i class="las la-exclamation-circle"></i>
						<p><span data-translate="privacy-disabled">Privacy warning: The director will be able to remotely change your camera, microphone, and URL.</span></p>
					</div>
					<div id="guestTips" style="display:none" aria-hidden="true">
						<p data-translate="for-the-best-possible-experience-make-sure">For the best possible experience, make sure</p>
						<span><i class="las la-plug"></i><span data-translate="your-device-is-powered">Your device is powered</span></span>
						<span><i class="las la-ethernet"></i><span data-translate="your-connection-is-hardwired-instead-of-wifi">Your connection is hardwired instead of wifi</span></span>
						<span><i class="las la-headphones"></i><span data-translate="you-are-using-headphones-earphones">You are using headphones / earphones</span></span>
					</div>
					<div id="videoMenu" class="videoMenu" aria-hidden="true">
						<div class="title">
                            <i class="las la-video"></i><span data-translate="video-source"> Video Source </span>
                        </div>
						<span style="display:inline-block;padding-top: 5px;">
							<select id="videoSourceSelect" tabindex="1" title="Video source list"></select>
							<span id="gear_webcam" onclick="toggle(document.getElementById('videoSettings'));">
								<i class="las la-cog" style="font-size: 140%; vertical-align: middle;" aria-hidden="true"></i>
							</span>
						</span>
						<div id="cameraTip1" class="cameraTip hidden">
							<i class="las la-info-circle"></i>
							<p><span id="cameraTipContext1"></span></p>
						</div>
					</div>
					<br />
					<center>
						<div id="videoSettings" style="display: none;" aria-hidden="true">
							<form id="webcamquality">
								<span class="hidden">
									<input type="radio" id="4kquality" alt="2160p60 video capture" name="resolution" value="-2" />
									<label for="4kquality">
										<span data-translate="up-to-4k">4K</span>
									</label> |
								</span>
								
								<input type="radio" id="fullhd" alt="1080p60 video capture" name="resolution" value="0" />
								<label for="fullhd">
									<span data-translate="max-resolution">High Resolution</span>
								</label> |
								
								<input type="radio" checked id="halfhd" alt="720p60 video capture"  name="resolution" value="1" />
								<label for="halfhd">
									<span data-translate="balanced">Balanced</span>
								</label> |
								
								<input type="radio" id="nothd" name="resolution" alt="360p30 video capture"  value="2" />
								<label for="nothd">
									<span data-translate="smooth-cool">Smooth and Cool</span>
								</label>
								<div id="webcamstats" style="padding: 5px 0 0 0;"></div>
							</form>
						</div>
					</center>
					<div id="audioMenu" class="form-group multiselect" alt="tip: Hold CTRL (command) to select Multiple" title="tip: Hold CTRL (command) to select Multiple" aria-hidden="true">
						<span class='gear_microphone hidden'>
							<input type="checkbox" id='micStereoMonoInput' alt="Mono microphone audio"  onchange="toggleMonoStereoMic(this);">Mono
						</span>
						<a id="multiselect-trigger" class="form-control multiselect-trigger" >
							<div  class="title">
								<i class="las la-microphone-alt"></i><span data-translate="select-audio-source"> Audio Source(s) </span>
								<i id='chevarrow1' class="chevron bottom" aria-hidden="true"></i>
								<div class="meter" id="meter1"></div><div class="meter2" id="meter2"></div>
							</div>
						</a>
						<ul id="audioSource" class="multiselect-contents" >
							<li>
								<input type="checkbox" id="multiselect1" name="multiselect1" style="display: none;" checked value="ZZZ" />
								<label for="multiselect1">
									<span data-translate="no-audio"> No Audio</span>
								</label>
							</li>
						</ul>
						<div id="audioTip1" class="cameraTip hidden">
							<i class="las la-info-circle"></i>
							<p><span id="audioTipContext1"></span></p>
						</div>
					</div>
					<br style="line-height: 0;" />
					<div id="headphonesDiv" class="audioMenu" aria-hidden="true">
						<div class="title">
							<i class="las la-headphones"></i><span data-translate="select-output-source"> Audio Output Destination</span><button onclick="playtone()" title="Play a sound out of the selected audio playback device" class="testtonebutton" type="button">Test</button>
						</div>
						<select id="outputSource" alt="Audio output device" ></select>
						<div id="headphoneTip1" class="cameraTip hidden">
							<i class="las la-info-circle"></i>
							<p><span id="headphoneTipContext1"></span></p>
						</div>
						<div id="audioTipSR" class="cameraTip hidden">
							<i class="las la-exclamation-circle"></i>
							<p><span id="audioTipContextSR"></span></p>
						</div>
					</div>
					<br style="line-height: 0;" />
					<div id="avatarDiv" class="hidden" aria-hidden="true">
						<div class="title">
							<i class="las la-robot"></i><span data-translate="select-avatar-image"> Default Avatar / Placeholder Image </span>
						</div>
						<div id="selectAvatarImage" style="margin-top:10px;">
							<img src="./media/avatar.webp" crossOrigin="Anonymous" loading="lazy" id="defaultAvatar1" style="max-width:130px;max-height:73.5px;display:inline-block;margin:10px;cursor:pointer;" onclick="changeAvatarImage(event, this);"/>
							<label class="selected" id="noAvatarSelected" style="width:130px;display:inline-block;text-align: center; cursor:pointer;">
							  <i class="las la-minus-circle" style="font-size: 3em;"></i><br />No Image Selected
							  <button onclick="changeAvatarImage(event, this)" style="position: fixed; top: -100em; margin-left:10px; border:1px solid #555;"></button>
							</label>
							<label style="width:130px;display:inline-block; text-align: center; cursor:pointer;">
							  <i class="las la-hdd" style="font-size: 3em;"></i><br />Select Local Image
							  <input type="file" onchange="changeAvatarImage(event, this)" accept="image/*" style="position: fixed; top: -100em; margin-left:10px; border:1px solid #555;"> 
							</label>
						</div>
					</div>
					<br style="line-height: 0;" />
					<div id="effectsDiv" aria-hidden="true">
						<div class="title">
							<i class="las la-robot"></i><span data-translate="select-digital-effect"> Digital Video Effects </span>
						</div>
						<select id="effectSelector" alt="Digital video effect options"  onchange="effectsDynamicallyUpdate(event, this);">
							<option value="0" data-translate="no-effects-applied">No effects applied</option>
							<option value="3" data-translate="blurred-background">Blurred background</option>
							<option value="13" class="hidden" disabled data-translate="blurred-background-2">Blurred background 2 🧪</option>
							<option value="4" data-translate="digital-greenscreen">Digital greenscreen</option>	
							<option value="5" data-translate="virtual-background">Virtual background</option>
							<option value="6" data-translate="face-mesh" title="experimental">Face mesh (slow load) 👨‍🔬</option>
							<option value="7" data-translate="digital-zoom">Digital zoom</option>
							<option value="overlay" data-translate="overlay-image">Overlay image</option>
							<option value="anon" data-translate="anonymous-mask" title="experimental">Anonymous mask 👨‍🔬</option>
							<option value="dog" data-translate="dog-face" title="experimental">Dog ears and nose 👨‍🔬</option>
							<option value="1" disabled title='Enable the Chrome experimental features flag to use: chrome://flags/#enable-experimental-web-platform-features' class='facetracker' data-translate="face-tracker">Face Tracker</option>
						</select>
						<span data-warnSimdNotice="true" style='display:none; font-size: 140%; margin-left:10px; vertical-align: middle; cursor:pointer' title="Improve performance and quality with this tip" onclick="smdInfo();">
							<i class="las la-info-circle"></i>
						</span>
						<span data-effectsNotice="true" style='display:none; font-size: 140%; margin-left:10px; vertical-align: middle; cursor:pointer' title="Improve performance and quality with this tip" onclick="warnUser('Use a Chromium Based Browser');">
							<i class="las la-info-circle"></i>
						</span>
						
						<div id="selectImageTFLITE" style="display:none;margin-top:10px;">
							
						</div>
						<div id="selectImageOverlay" style="display:none;margin-top:10px;">
							
						</div>
						<div id="selectEffectAmount" style="display:none;margin-top:10px;">
							<label for="selectEffectAmountInput" style="width: 113px;display: inline-block;">Effect Amount</label>
							<input id="selectEffectAmountInput" style="display: inline-block;width: 350px; max-width: 60%;margin:6px 0;" name="selectEffectAmountInput" title="Adjust the amount of effect applied" type="range" oninput="changeEffectAmount(event, this)" onchange="changeEffectAmount(event, this)" min="0" step="1" max="20">
						</div>
						
					</div>
					<br style="line-height: 0;" />
					<div id="addPasswordBasic">
                        <div class="title" title="Add an optional password">
                            <i class="las la-key"></i><span data-translate="add-a-password"> Add a Password</span>
                        </div>
                        <input type="text" id="passwordBasicInput" title="Enter an optional password here" placeholder="optional"/>
                    </div>
					
					<br style="line-height: 0;" />
					<div id="rememberStreamID" class="hidden" style="display:inline-block;" title="Remember and reuse the provided stream ID on each visit">
						<br />
						<br style="line-height: 0;" />
                        Remember Stream ID: <input type="checkbox" id="rememberStreamIDcheck" checked="true" />
                    </div>
					
					<div id="SafariWarning" class="startupWarning hidden" aria-hidden="true" title="Consider using Chrome instead of Safari">
						<i class="las la-exclamation-circle"></i>
						<p><span data-translate="use-chrome-instead">Consider using a Chromium-based browser instead.<br />
 						Safari is more prone to having audio issues</span></p>
					</div>
					
					<div id="oldiOSWarning" class="startupWarning hidden" title="Please update your version of iOS for best performance">
						<i class="las la-exclamation-circle"></i>
						<p><span data-translate="update-your-device">We've detected that you are using an old version of Apple iOS.<br /><br />Please consider updating if facing issues.</span></p>
					</div>
					
				</div>
				<div class="outer close" role="button" aria-pressed="false" title="Go back">
					<div class="inner">
						<label class="labelclass">
							<span data-translate="back">Back</span>
						</label>
					</div>
				</div>
			</div>
			<div id="container-3a"  title="Add your Microphone to OBS" onkeyup="enterPressedClick(event,this);"  alt="Add your Microphone to OBS" tabindex="1" role="button" aria-pressed="false" class="microphoneBackground column columnfade pointer rounded card hidden" onclick="previewWebcam(true)" style=" overflow-y: auto;">
				<h2 id="add_microphone">
					<span data-translate="add-your-microphone">Add your Microphone to OBS</span>
				</h2>
				<div class="outer close" role="button" aria-pressed="false"  title="Go back">
					<div class="inner">
						<label class="labelclass">
							<span data-translate="back">Back</span>
						</label>
					</div>
				</div>
			</div>
			<div id="container-2" title="Remote Screenshare into OBS" onkeyup="enterPressedClick(event,this);"  alt="Remote Screenshare into OBS"  tabindex="1" role="button" aria-pressed="false" class="column columnfade pointer rounded card" style=" overflow-y: auto;">
				<h2 id="add_screen">
					<span data-translate="remote-screenshare-obs">Remote Screenshare into OBS</span>
				</h2>
				<div class="container-inner">
					<span>
						<video id="screenshare" autoplay="true" muted="true" loop src="./media/screenshare.webm" class="lazy" style='background-image: unset;'></video>
					</span>
					<br />
					<button class='gobutton' style="padding: 10px; font-size: 120%;animation: pulsate 2s ease-out infinite;" alt="clilck to select you screen to share" onclick="publishScreen()">
						<span data-translate="select-screen-to-share">SELECT SCREEN TO SHARE</span>
					</button>
					<span title="Change the capture resolution. This defines what the maximum resolution the video can be encoded at. A lower resolution will be smoother." id="gear_screen" style="display: inline-block; cursor: pointer;" onclick="toggle(document.getElementById('videoSettings2'));">
						<i class="las la-cog" style="font-size: 170%; vertical-align: middle;" aria-hidden="true"></i>
					</span>
					<center>
						<span id="videoSettings2" style="display: none;">
							<form id="webcamquality2">
								<input type="radio" id="maxres2" name="resolution2" value="-1" />
								<label style="cursor:help" for="maxres2" title="Attempts to capture the same resolution that the window/display is displayed at">
									<span data-translate="highest-resolution">Highest</span>
								</label> &nbsp;&nbsp;|&nbsp;&nbsp;
							
								<input type="radio" id="fullhd2" name="resolution2" value="0" />
								<label style="cursor:help" for="fullhd2" title="This will capture at up to 1920x1080 resolution, but it will use up more CPU and may reduce frame rate.">
									<span data-translate="1080p-resolution">Full HD</span>
								</label> &nbsp;&nbsp;|&nbsp;&nbsp;
								
								<input type="radio" checked id="halfhd2" name="resolution2" value="1" />
								<label style="cursor:help" for="halfhd2" title="This will capture at a medium resolution; suitable for gaming where frame rates matter more than resolution" >
									<span data-translate="720p-balanced">Balanced</span>
								</label> &nbsp;&nbsp;|&nbsp;&nbsp;
								
								<input type="radio" id="nothd2" name="resolution2" value="2" />
								<label style="cursor:help" for="nothd2" title="This will capture at a low resolution, suitable for low powered computers or computers on poor networks">
									<span data-translate="360p-smooth-cool">Low-res</span>
								</label>
								<div id="webcamstats2"></div>
							</form>
						</span>
					</center>
					<div id="consentWarning2" class="startupWarning hidden">
						<i class="las la-exclamation-circle"></i>
						<p><span data-translate="privacy-disabled">Privacy warning: The director will be able to remotely change your camera, microphone, and URL while this page is open, if you continue.</span></p>
					</div>
					<div id="audioScreenShare1">
                        <div class="title">
                            <i class="las la-microphone-alt"></i>
                            <span data-translate="audio-sources">Audio Sources</span>
                        </div>
						<select id="audioSourceScreenshare" multiple  alt="tip: Hold CTRL (command) to select Multiple" title="tip: Hold CTRL (command) to select Multiple" onchange="requestAudioStream();">
							<option value="screenshare" selected>
								Screen Share Audio (default)
							</option>
							<option value="microphones">
								Other Audio Sources
							</option>
						</select>
					</div>
					<br />
					<div id="headphonesDiv2">
                        <div class="title">
                            <i class="las la-headphones"></i>
                            <span data-translate="select-output-source"> Audio Output Destination: 
							</span>
							<button onclick="playtone(true)" class="testtonebutton" style="padding:3px 5px 2px 5px; margin:0; margin-left:15px; position: relative;" type="button">Test</button>
						</div>
                        <select id="outputSourceScreenshare" onclick="requestOutputAudioStream();">
							<option value="default">
								Default Device
							</option>
						</select>
					</div>
					<br />
					<div id="audioScreenCaptureDocs" data-translate="application-audio-capture">For application-specific audio capture, <a href='https://docs.vdo.ninja/audio' target="_blank">see here</a></div>
					<div id="audioScreenCaptureDocs2" data-translate="1080p-screen-capture-guide">For achieving 1080p60 game-capture, <a href='https://docs.vdo.ninja/guides/how-to-screen-share-in-1080p' target="_blank">see here</a></div>
					
				</div>
				<div class="outer close" title="Go back">
					<div class="inner">
						<label class="labelclass">
							<span data-translate="back">Back</span>
						</label>
					</div>
				</div>
			</div>
			<div id="container-4" tabindex="1" alt="Create Reusable Invite" onkeyup="enterPressedClick(event,this);" onclick="loadQR();" title="Create Reusable Invite" role="button" aria-pressed="false" class="column columnfade pointer rounded card" style=" overflow-y: auto;">
				<h2>
					<span data-translate="create-reusable-invite">Create Reusable Invite</span>
				</h2>
				<div id="gencontent2" style="display:none; max-height: 100%;min-height: 90%;"></div>
				<div id="gencontent" class="container-inner">
					
					<br />
					<br />
					<span data-translate="here-you-can-pre-generate">Here you can pre-generate a reusable Browser Source link and a related guest invite link.</span>
					<br />
					<br />
					<p>
						<input type="text" autocorrect="off" autocapitalize="none" style="padding: 5px; font-size: 120%;" id="videoname4" onkeyup="enterPressed(event, generateQRPage);" placeholder="Give this media source a name (optional)" size="35" maxlength="70" />
						<br />
						<br />
					</p>
					<button style="padding: 20px;" class='gobutton' onclick="generateQRPage()">
						<span data-translate="generate-invite-link">GENERATE THE INVITE LINK</span>
					</button>
					<br />
					<span style="margin: 20px; max-width: 420px; text-align: left; margin: auto auto;display:block;">
						<div class="invite_setting_group">
							<h4>
								<span data-translate="quality-paramaters">Quality settings</span>
							</h4>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_bitrate" />
								<label for="invite_bitrate">
									<span data-translate="unlock-video-bitrate" title="Ideal for 1080p60 gaming, if your computer and upload are up for it" >Unlock the video bitrate (20mbps)</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_vp9" />
								<label for="invite_vp9">
									<span data-translate="force-vp9-video-codec" title="Better video compression and quality at the cost of increased CPU encoding load">Use the VP9 video codec</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_stereo" />
								<label for="invite_stereo">
									<span data-translate="enable-stereo-and-pro" title="Disable digital audio-effects and increase audio bitrate">Enable stereo and pro HD audio</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<label for="invite_quality" data-translate="video-resolution">Target video resolution: </label>
								<select id="invite_quality" name="invite_quality">
									<option value="-1" selected>User selectable</option>
									<option value="0">1080p (high-quality)</option>
									<option value="1">720p (balanced)</option>
									<option value="2">360p (older computers)</option>
								</select>
							</div>
						</div>
						<div class="invite_setting_group">
							<h4>
								<span data-translate="general-paramaters">User options</span>
							</h4>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_effects" />
								<label for="invite_effects">
									<span data-translate="allow-effects-invite" title="The guest will be able to select digital video effects to apply.">Allow video effects to be used</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_automic" />
								<label for="invite_automic">
									<span data-translate="hide-mic-selection" title="The guest will not have a choice over audio-options">Force select the default microphone</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_hidescreen" />
								<label for="invite_hidescreen">
									<span data-translate="hide-screen-share" title="The guest will only be able to select their webcam as an option">Hide the screenshare option</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_obfuscate" />
								<label for="invite_obfuscate">
									<span data-translate="obfuscate_url" title="Encode the URL so that it's harder for a guest to modify the settings.">Obfuscate the invite URL</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<span data-translate="add-a-password-to-stream" title="Add a password to make the stream inaccessible to those without the password"> Add a password:</span>
								<input type="text" autocorrect="off" autocapitalize="none" id="invite_password" placeholder="Add an optional password" />
							</div>
						</div>
						<div class="invite_setting_group">
							<h4>
								<span data-translate="interview-paramaters">Two-way chat</span>
							</h4>
							<div class="invite_setting_item">
								<input type="checkbox" id="invite_hostlink" />
								<label for="invite_hostlink">
									<span data-translate="generate-host-link" title="A link for the host speaker to chat with the guest; 2-way interview chat.">Create a link for the host speaker</span>
								</label>
							</div>
							<div class="invite_setting_item">
								<span data-translate="add-the-guest-to-a-room" title="Add the guest to a group-chat room; it will be created automatically if needed."> Add the guest to a room:</span>
								<input type="text" autocorrect="off" autocapitalize="none" id="invite_joinroom" placeholder="Enter Room name here" oninput="document.getElementById('invitegroupchat').style.display='block';" />
							</div>
							<div class="invite_setting_item">
								<span id="invitegroupchat" style="display: none;" title="Customize the room settings for this guest">
									<label for="invite_group_chat_type" data-translate="invite-group-chat-type">This room guest can:</label>
									<select id="invite_group_chat_type" name="invite_group_chat_type">
										<option value="0" selected data-translate="can-see-and-hear">Can see and hear the group chat</option>
										<option value="1" data-translate="can-hear-only">Can only hear the group chat</option>
										<option value="2" data-translate="cant-see-or-hear">Cannot hear or see the group chat</option>
									</select>
								</span>
							</div>
						</div>
						<div class="invite_setting_group_links">See the 
							<a target="_blank" href="https://docs.vdo.ninja/advanced-settings">documentation</a> for a list of all options and details.<br /><br />
							Try out the advanced <a target="_blank" href="https://invite.vdo.ninja/">invite generator</a> here as well.
						</div>
					</span>
				</div>
				<div class="outer close" role="button" aria-pressed="false">
					<div class="inner">
						<label class="labelclass">
							<span data-translate="back">Back</span>
						</label>
					</div>
				</div>
			</div>
			
			<div id="dropButton" onclick="dropDownButtonAction()" title="More Options" aria-hidden="true"><i class="las la-chevron-down" ></i></div>
			
			<div id="container-5" class="column columnfade pointer rounded card hidden" style=" overflow-y: auto;">
				<h2><span data-translate="share-local-video-file">Stream Media File</span></h2>
				<div class="container-inner">
					
					<br /><br />
					<span data-translate="select-the-video-files-to-share">SELECT THE VIDEO FILES TO SHARE</span><br /><br />
					<input id="fileselector" onchange="session.publishFile(this,event);" type="file" accept="video/*,audio/*" alt="Hold CTRL (or CMD) to select multiple files" title="Hold CTRL (or CMD) to select multiple files" multiple/>
					<br /><br />
					<div class='warning message-card'>
						<h1>Warning</h1>
						<p>Media file streaming is still quite experimental. Please do not rely on it heavily for your productions. Feedback welcome.</p>
					</div>
					<div class='warning message-card hidden' id='chrome_warning_fileshare'>
						<h1>Chrome/Edge users</h1>
						<p>Keep this tab visible, else the video playback will stop</p>
					</div>
					<div class='warning message-card hidden' id='safari_warning_fileshare'>
						<h1>Safari Users</h1>
						<p>Safari does not support this feature. Consider Chrome or Firefox instead.</p>
					</div>
					<br /><br />
					To host a file for download, rather than for streaming, try the following instead: 
					<input id="fileselector2" onchange="session.hostFile(this,event);" type="file" title="Transfer any file"/>
				</div>
				
				<div class="outer close">
					<div class="inner">
						<label class="labelclass">
							<span data-translate="back">Back</span>
						</label>
					</div>
				</div>
			</div>
			
			<div id="container-6" class="column columnfade pointer rounded card hidden" style=" overflow-y: auto;">
				<h2><span data-translate="share-website-iframe">Share Website</span></h2>
				<i style="margin-top:30px;font-size:560%;overflow:hidden;" class="largeDarkIcon las la-broadcast-tower"></i>
				<div class="container-inner">
					<br />
					<div id="previewIframe"></div>
					<br />
					<span data-translate="enter-the-website-URL-you-wish-to-share">Enter the URL website you wish to share.</span><br /><br />
					<input type="text" autocorrect="off" id="iframeURL" autocapitalize="none" style="margin:10px; border:2px solid; padding:10px; width:400px;" title="Enter an HTTPS URL" multiple/><br />
					<button onclick="previewIframe(getById('iframeURL').value);" >Preview</button> 
					<button onclick="this.innerHTML = 'Update'; session.publishIFrame(getById('iframeURL').value);" >Share</button><br />
					<div class="message-card info">
						<h1>Usage information</h1>
						<p></p>
						<ul style="text-align: left;">
						<li>Not all websites will work with this feature as some sites disallow embedding.</li>
						<li>The site will try to auto-optimize standard Youtube or Twitch links.</li>
						<li>Remote websites must be CORS/IFrame compatible with full SSL-encryption enabled.</li>
					</ul>
					</div>
				</div>
				<div class="outer close">
					<div class="inner">
						<label class="labelclass">
							<span data-translate="back">Back</span>
						</label>
					</div>
				</div>

			</div>
			
			<div id="container-7" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = './speedtest.html';">
				<h2><span data-translate="run-a-speed-test">Run a Speed Test</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-tachometer-alt"></i>
			</div>
			
			<div id="container-8" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = './mixer.html';">
				<h2><span data-translate="try-the-mixer-out">Custom Mixed Layouts</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-blender"></i>
			</div>
			
			<div id="container-14" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = 'https://versus.cam';">
				<h2><span data-translate="try-out-versus-cam">Multi-Stream Monitor</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-gamepad"></i>
			</div>
			
			<div id="container-15" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = './comms.html';">
				<h2><span data-translate="voice-comms-app">Group Voice Comms</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-comments"></i>
			</div>
			
			<div id="container-9" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = 'https://guides.vdo.ninja';">
				<h2><span data-translate="read-the-guides">Basic Usage Guides</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-book-open"></i>
			</div>
			
			<div id="container-13" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = 'https://linkgen.vdo.ninja';">
				<h2><span data-translate="wizard-link-generator">Wizard Link Generator</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-hat-wizard"></i>
			</div>
			
			<div id="container-10" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = 'https://docs.vdo.ninja';">
				<h2><span data-translate="get-full-documentation">Full Documentation</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-info"></i>
			</div>
			
			<div id="container-11" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = 'https://github.vdo.ninja';">
				<h2><span data-translate="get-the-source-code">Source Code</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-code-branch"></i>
			</div>
			
			<div id="container-12" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = 'https://docs.vdo.ninja/getting-started/sponsor';">
				<h2><span data-translate="show-your-support">Show Your Support</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-heartbeat"></i>
			</div>
			
			<div id="container-17" class="column columnfade pointer rounded card hidden" style="overflow: hidden;" onclick="window.location = './whip';">
				<h2><span data-translate="publish-via-whip">Publish via WHIP</span></h2>
				<i style="margin-top:30px;font-size:600%;overflow:hidden;" class="largeDarkIcon las la-broadcast-tower"></i>
			</div>
			
			<div id="container-16" class="column columnfade pointer rounded card hidden" style=" overflow-y: auto;">
				<h2><span data-translate="share-whepsrc">Share via WHEP</span></h2>
				<i style="margin-top:30px;font-size:560%;overflow:hidden;" class="largeDarkIcon las la-broadcast-tower"></i>
				<div class="container-inner">
					<br />
					<div id="previewWhepSource"></div>
					<br />
					<span data-translate="enter-the-whep-URL-you-wish-to-share">Enter the WHEP URL you wish to share.</span><br /><br />
					<input type="text" autocorrect="off" id="whepURL" autocapitalize="none" style="margin:10px; border:2px solid; padding:10px; width:400px;" title="Enter an HTTPS URL" multiple/><br />
					<button onclick="previewIframe(getById('whepURL').value);" >Preview WHEP Stream</button> 
					<button onclick="this.innerHTML = 'Update'; session.publishIFrame(getById('iframeURL').value);" >Start Sharing</button><br />
					<div class="message-card info">
						<h1>Usage information</h1>
						<p></p>
						<ul style="text-align: left;">
						<li>WHEP sources are expected to support multiple viewers; simulcasting will be used if possible.</li>
						<li>Remote URLs must allows cross-origin requests (CORS), along with having SSL (https).</li>
					</ul>
					</div>
				</div>
				<div class="outer close">
					<div class="inner">
						<label class="labelclass">
							<span data-translate="back">Back</span>
						</label>
					</div>
				</div>
			</div>
			
			<p></p>
			
			<div id="unexpectedPushLink" class='hidden' style="width:100%;color: white;display:block;font-size:130%;">
				<h2>If this page is unexpected, double check your links.</h2>
				<b>?push=xxx</b> links are for sending video, while <b>?view=xxx</b> links are for viewing.
			</div>
			
			<div id="info" class="fullcolumn columnfade">
				<center>
					<div class="infoblob" align="left">
						<span data-translate="info-blob">
							<h2>What is VDO.Ninja</h2>
							<br />
							<li>100% <b>free</b>; no downloads; no personal data collection; no sign-in</li>
							<li>Bring live video from your smartphone, remote computer, or friends directly into OBS or other studio software.</li>
							<li>We use cutting edge Peer-to-Peer forwarding technology that offers privacy and ultra-low latency</li>
							<br />
							<li>Youtube video 
								<i class="lab la-youtube"></i>
								<a title="Open a YouTube video demoing the basics of VDO.Ninja" href="https://www.youtube.com/watch?v=QaA_6aOP9z8&list=PLWodc2tCfAH1l_LDvEyxEqFf42hOBKqQM&index=1" alt="Youtube video demoing VDO.Ninja">Demoing it here</a>
							</li>
							
							<br />
							<i>
								<a href="https://docs.vdo.ninja/common-errors-and-known-issues/known-issues" title="For a list of common or known issues, click here" target="_blank"><span style="color: red;">Known issues:</span></a>
							</i>
							<br />
							<li>
								Starting OBS in Administrator mode has resolved a couple recent user issues related to Windows Firewall P2P blocking and video/audio degraded performance issues.
							</li>
							<li>
								If the video fails to load in OBS Studio, where the browser source remains blank, try disabling hardware-acceleration or 
								<a href='https://docs.vdo.ninja/common-errors-and-known-issues/obs.ninja-doesnt-show-up-in-obs-or-is-choppy' title="Click to link out to the VDO.Ninja help guide for common OBS Studio problems" target="_blank">refer to this help guide</a> for more.
							</li>
							<li>
								Apple M1 chip users may wish to update to newer versions of macOS, as older versions (eg: Big Sur) seem more prone to audio/video delay and desync issues.
							</li>
							<br />
							<h4>
								<span style="color:#daad09;">Welcome to VDO Ninja! We've rebranded!  Nothing else is changing and we're staying 100% free.</span>
							</h4>
							<br />
							🌱 Site last updated on August 20th. You can also still access the previous version, which <a href="https://vdo.ninja/v24/">is hosted here</a>. Development <a target="_blank" title="Open a page with recent VDO.Ninja development and feature updates" href="https://updates.vdo.ninja/">updates are here.</a>
							<br />
							<br />
							<h3>
							   🛠 For support, join the <a href="https://discord.gg/T4xpQVv" target="_blank">Discord <i class="lab la-discord"></i></a> or see the <a href="https://www.reddit.com/r/VDONinja/" target="_blank">sub-reddit <i class="lab la-reddit-alien"></i></a>. The <a href="https://docs.vdo.ninja/" target="_blank">documentation is here</a> and my personal email is <i>steve@seguin.email</i>
							</h3> 
								
						</span>
					</div>
				</center>
			</div>
			<form method="post" onsubmit="setFormSubmitting()" style="display: none;" aria-hidden="true">
				<input type="submit" />
			</form>
			<div id="credits" class="credits" aria-hidden="true">
				<a href='https://github.com/steveseguin/vdoninja' aria-hidden="true">VDO.Ninja, by Steve Seguin</a> 
			</div>
		</div>
		<div id="directorlayout" class="hidden directorsgrid">
			<div id="roomHeader" style="display:none">
				<div  class="hideLinksClass">
					<span style='color:white' id="directorLinksButton" onclick="hideDirectorinvites(this);">
						<i class="las la-caret-down"></i><span data-translate="hide-the-links"> LINKS (GUEST INVITES & SCENES)</span>
					</span>
					<span id="help_directors_room" style='float: right;color:white;text-align: right;' onclick="toggle(getById('roomnotes2'),this,false);">
						<i class="las la-question-circle"></i> <span data-translate="click-here-for-help">Click Here for a quick overview and help</span>
					</span>
				</div>
				<div id='roomnotes2' style='max-width:1191px;display:none;padding:0 0 0 10px;' >
					<span style='color:#CCC;' data-translate='welcome-to-control-room'>
						<b>Welcome. This is the director's control-room for the group-chat.</b><br /><br />
						You can host a group chat with friends using a room. Share the blue link to invite guests who will join the chat automatically.
						<br /><br />
						<span style='color:red'>Known Limitations with Group Rooms:</span><br />
						<li>A group room can handle up to around 30 guests, depending on numerous factors, including CPU and available bandwidth of all guests in the room. To achieve more than around 7-guests though, you will likely want to <a href="https://www.youtube.com/watch?v=bpRa8-UYCGc" title="Youtube Video demoing how to do this">disable video sharing between guests</a>. Using &broadcast, &roombitrate=0 or &novideo are options there.</li>
						
						<li>Videos will appear of low quality on purpose for guests and director; this is to save bandwidth and CPU resources. It will be high-quality within OBS still though.</li>
						
						<li>The state of the scenes, such as which videos are active in a scene, are lost when the director resets the control-room or the scene.</li>
						<br />
						Further Notes:<br /><br />
						<li>Links to Solo-views of each guest video are offered under videos as they load. These can be used within an OBS Browser Source.</li>
						<li>You can use the auto-mixing Group Scenes, the green links, to auto arrange multiple videos for you in OBS.</li>
						<li>You can use this control room to record isolated video or audio streams, but it is an experimental feature still.</li>
						<li>If you transfer a guest from one room to another, they won't know which room they have been transferred to.</li>
						<li>OBS will see a guest's video in high-quality; the default video bitrate is 2500kbps. Setting higher bitrates will improve motion.</li>
						<li>VP8 is typically the default video codec, but using &codec=vp9 or &codec=h264 as a URL in OBS can help to reduce corrupted video puke issues.</li>
						<li>&stereo=2 can be added to guests to turn off audio effects, such as echo cancellation and noise-reduction.</li>
						<li>https://invite.cam is a free service provided that can help obfuscuate the URL parameters of an invite link given to guests.</li>
						<li>Adding &showonly=SOME_OBS_VIRTUALCAM to the guest invite links allows for only a single video to be seen by the guests; this can be output of the OBS Virtual Camera for example</li>
						<br />
						
						For advanced URL options and parameters, <a href="https://docs.vdo.ninja/advanced-settings">see the Wiki.</a>
					</span>
				</div>
			</div>
			
			<div class='directorContainer half' id='directorLinks1' style='display:none;margin-top:0;'>
				<div class='directorBlock'>
					<h2 title="Invite a guest or camera source to publish into the group room" style="margin-top: 5px;"><i class="las la-video director-link-icons" ></i><span data-translate="invite-a-guest">INVITE A GUEST</span></h2>
					<span style="margin:5px; line-height: 1.6;" data-translate='invite-users-to-join'>Guests can use the link to join the group room</span>
					<a onclick='copyFunction(this,event)' id="director_block_1" class='task grabLinks' data-menu="context-menu" style='cursor:copy;background-color: #0003;'></a>
					<span style="display:block;">
						<span style="bottom: 0; margin: 22px 0 0 10px;  position: relative; display:inline-block; max-width:40%;">
							<label class="switch" title="If disabled, the invited guest will not be able to see or hear anyone in the room.">
							<input type="checkbox" checked data-param="&do" onchange="updateLinkInverse(1,this);saveDirectorSettings();">
							<span class="slider"></span>
						</label>
							<span data-translate="guests-hear-others" style="line-height:0;position:relative;top:-3px;">Guests hear others</span>
						</span>
						<button class='pull-right' onclick='copyFunction(getById("director_block_1"),event)'><i class='las la-copy'></i><span data-translate="copy-link">Copy link</span></button>
						<button class='pull-right' id="showCustomizerButton1"  onclick='showCustomizer(1,this)'><i class='las la-tools'></i><span data-translate="customize">Customize</span></button>
					<span>
				</div>
			</div>
			
			<div class='directorContainer half' id='directorLinks2' style='display:none;margin-top:0;'>
				<div class='directorBlock' style="background-color: var(--green-accent);" >
					<h2 title="Use this link in the OBS Browser Source to capture the video or audio" style="margin-left: 1px;margin-top: 5px;"><i class="las la-th-large director-link-icons" style="margin-right: 6px;" ></i> <span data-translate="capture-a-group-scene">CAPTURE A GROUP SCENE</span></h2>
					<span style="margin:5px; line-height: 1.6;" data-translate='this-is-obs-browser-source-link'>Use in OBS or other studio software to capture the group video mix</span>
					<a onclick='copyFunction(this,event)'  data-drag="1" draggable="true"  id="director_block_3" data-menu="context-menu" class='task grabLinks publish' style='cursor:grab;background-color: #0003;'></a>
					<span style="display:block;">
						<span style="bottom: 0; margin: 22px 0 0 10px;  position: relative; display:inline-block; max-width:40%;">
							<label class="switch" title="If disabled, you must manually add a video to a scene for it to appear.">
							<input type="checkbox" checked data-param="&scene" onchange="updateLinkScene(3,this);saveDirectorSettings();">
							<span class="slider"></span>
						</label>
							<span data-translate="auto-add-guests" style="line-height:0;position:relative;top:-3px;">Auto-add guests</span>
						</span>
						<button class='pull-right' style='font-size:1.15em' onclick='copyFunction(getById("director_block_3"),event)'><i class='las la-copy'></i><span data-translate="copy-link">Copy link</span></button>
						<button class='pull-right' style='font-size:1.15em' id="showCustomizerButton3"  onclick='showCustomizer(3,this)'><i class='las la-tools'></i><span data-translate="customize">Customize</span></button>
					<span>
				</div>
			</div>
			
			<div class='directorContainer' id="customizeLinks" style='display:none;margin-top:0;padding-top:15px'>
				<div class='directorBlock' id="customizeLinks1" style='display:none;margin-top:0;padding-bottom:0;'>
					<div style="display:inline-block;margin-top: 12px;   position: relative;  margin-right:10px;">
						<label class="switch" title="Disables Echo Cancellation and improves audio quality">
						<input type="checkbox" data-param="&s" onchange="updateLink(1,this);">
						<span class="slider"></span>
						</label><span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext" style="width: 16em;">This can cause guests to be too quiet or have feedback/echo issues</span></span> <span data-translate="pro-audio-mode">Pro-audio mode</span>
						<br />
						<label class="switch" title="Audio-only sources are visually hidden from scenes">
						  <input type="checkbox" data-param="&st" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="hide-audio-only-sources">Hide audio-only sources</span>
						<br />
						
						<label class="switch" title="Allow for remote stat monitoring via the monitoring tool">
						  <input type="checkbox" data-param="&remote" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="remote-monitoring">Remote Monitoring</span>
						<br />
						
						<label class="switch" title="The guest will be asked if they want to reload the previous link when revisiting">
						  <input type="checkbox" data-param="&sticky" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="invite-saved-to-cookie">Invite saved to cookie</span>
						<br />
						
						<label class="switch" title="Guest will be prompted to enter a Display Name">
						  <input type="checkbox" data-param="&l" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="ask-for-display-name">Ask for display name</span>
						<br />
						<label class="switch" title="Display Names will be shown in the bottom-left corner of videos">
						  <input type="checkbox" data-param="&sl" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="show-display-names">Show display names</span>
						<br />
						<label class="switch" title="Guests not actively speaking will be hidden">
						  <input type="checkbox" data-param="&sas" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="show-active-speaker">Show active speakers</span>
						<br />
						<label class="switch" title="Show a custom welcome message to the joining guest of this invite link">
						  <input type="checkbox" data-param="&welcome" onchange="updateLinkWelcome(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="show-welcome-message">Show welcome message</span>
						
					</div>
					<div  style="display:inline-block;margin-top: 12px; position: relative; margin-right:10px;">
						<label class="switch" title="Request 1080p60 from the Guest instead of 720p60, if possible">
						  <input type="checkbox" data-param="&q" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext">This can cause video playback to lag</span></span><span data-translate="1080p60-if-available">1080p60 Video if Available</span>
						<br />
						<label class="switch" title="The default microphone will be pre-selected for the guest">
						  <input type="checkbox" data-param="&ad" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="auto-select-microphone">Auto-select default microphone</span>
						<br />
						<label class="switch" title="The default camera device will selected automatically">
						  <input type="checkbox" id="vd1toggle" data-param="&vd" onchange="if(getById('vd0toggle').checked){getById('vd0toggle').checked=false;updateLink(1,getById('vd0toggle'));} updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="auto-select-camera">Auto-select default camera</span>
						<br />
						<label class="switch" title="The camera will load in a default safe-mode that may work if other modes fail.">
						  <input type="checkbox" data-param="&safemode" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="compatibility-mode">Compatibility mode</span>
						<br />
						<label class="switch" title="The guest won't have access to changing camera settings or screenshare">
						  <input type="checkbox" data-param="&ns" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="hide-setting-buttons">Hide settings button</span>
						<br />
						<label class="switch" title="Allow the guests to pick a virtual backscreen effect">
						  <input type="checkbox" data-param="&effects" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext">Uses more CPU and freezes the video if the guest doesn't keep the tab visible.</span></span> <span data-translate="virtual-backgrounds">Virtual backgrounds</span>
						
						<br />
						<label class="switch" title="Disable animated transitions during video mixing">
						  <input type="checkbox" data-param="&animate=0" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="disable-animated-mixing">Disable animations</span>
						
						<br />
						<label class="switch" title="This mode encodes the video and audio into chunks, which are shared with multiple viewers. Limited browser support. Can potentially reduce CPU and improve video quality, but will rely on a buffer.">
						  <input type="checkbox" data-param="&chunked=500" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext">Pretty experimental and limited browser support, though relatively low CPU usage.</span></span>
						<span data-translate="chunked-mode">P2P Chunked-mode</span>
						
					</div>
					<div  style="display:inline-block;margin-top: 12px; position: relative; margin-right:10px;">
						<label class="switch" title="Increase video quality that guests in room see.">
						  <input type="checkbox" data-param="&trb=2000" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext"><span data-translate="powerful-computers-only">Only use with powerful computers and small groups!!</span></span></span> <span data-translate="guests-see-HD-video">Guests see HD video</span>
						<br />
						<label class="switch" title="The guest will not see their own self-preview after joining">
						  <input type="checkbox" data-param="&np" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="no-self-preview">Disable self-preview</span>
						<br />
						<label class="switch" title="Guests will have an option to poke the Director by pressing a button">
						  <input type="checkbox" data-param="&hand" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="raise-hand-button">Display 'raise-hand' button</span>
						<br />
						<label class="switch" title="Add an audio compressor to the guest's microphone">
						  <input type="checkbox" data-param="&comp" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="enable-compressor">Enable audio compressor</span>
						<br />
						<label class="switch" title="Add an Equalizer to the guest's microphone that the director can control">
						  <input type="checkbox" data-param="&eq" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="enable-equalizer">Enable equalizer as option</span>
						<br />
						<label class="switch" title="Show some prep suggestions to the guests on connect">
						  <input type="checkbox" data-param="&tips" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="show-guest-tips">Show guest setup tips</span>
						<br />
						<label class="switch" title="Have screen-shares stream ID's use a predictable prefixed value instead of a random one.">
						  <input type="checkbox" data-param="&ssid" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="prefix-screenshare">Prefix screenshare IDs</span>	
						<br />
						<label class="switch" title="Allow the guest to select an avatar image for when they hide their camera">
						  <input type="checkbox" data-param="&avatar" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="avatar-selection">Can select an Avatar image</span>
					</div>
					<div  style="display:inline-block;margin-top: 12px; position: relative; ">
						
						<label class="switch" title="Use Meshcast servers to restream video data from this guest to its viewers, reducing the CPU and upload load in some cases. Will increase latency a bit.">
						  <input type="checkbox" data-param="&meshcast" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext">Uses a server to restream data, rather than p2p.</span></span>
						<span data-translate="meshcast-mode">Stream via server</span>
						
						<br />
						<label class="switch" title="The guest's self-video preview will appear tiny in the top right">
						  <input type="checkbox" data-param="&mini" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="mini-self-preview">Mini self-preview</span>
						
						<br />
						<label class="switch" title="Show an ovelaid grid on the guest's preview video to help with self-centering of the guest.">
						  <input type="checkbox" data-param="&grid" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="rule-of-thirds">Show rule-of-thirds grid</span>
						
						<br />
						<label class="switch" title="The guest can only see the Director's video, if provided">
						  <input type="checkbox" data-param="&broadcast" id="broadcastSlider" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						📡<span data-translate="only-see-director-feed">Only see the director's video</span>
						<br />
						<label class="switch" title="The guest's microphone will be muted on joining. They can unmute themselves.">
						  <input type="checkbox" data-param="&m" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="mute-microphone-by-default">Muted; guest can unmute</span>
						<br />
						<label class="switch" title="Have the guest join muted, so only the director can Unmute the guest.">
						  <input type="checkbox" data-param="&g=0" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="unmute-by-director-only">Muted; director can unmute</span>
						<br />
						<label class="switch" title="The guest will not be asked for a video device on connection">
						  <input type="checkbox" id="vd0toggle" data-param="&vd=0" onchange="if(getById('vd1toggle').checked){getById('vd1toggle').checked=false;updateLink(1,getById('vd1toggle'));} updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="guest-joins-with-no-camera">Guest joins with no camera</span>
						<br />
						<label class="switch" title="Make the invite URL encoded, so parameters are harder to tinker with by guests. This also debrands the interface and gives it a new domain name.">
						  <input type="checkbox" data-param="" id="obfuscate_director_1" onchange="updateLink(1,this);">
						  <span class="slider"></span>
						</label>
						<span data-translate="obfuscate-link">Obfuscate with Invite.cam</span>
					</div>
				</div>
			
				<div class='directorBlock' id="customizeLinks3" style='display:none;margin-top:5px;padding-bottom:0;'>
					<div  style="display:inline-block; position: relative; margin-right:10px; ">
						<div style="display:inline-block;margin-top: 12px;   position: relative;">
						
						<label class="switch">
							<input type="checkbox" data-param="&st" onchange="updateLink(3,this, true);">
							<span class="slider"></span>
							</label>
							<span data-translate="hide-audio-only-sources">Hide audio-only sources</span>
							<br />
							
							<label class="switch" title="Enable 8-channel audio output into OBS Studio, if 7.1-channel audio support is also enabled in OBS">
						    <input type="checkbox" data-param="&channels" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							🎛️ <span data-translate="enable-8-channel-audio">8-channel output</span>
							<br />
							
							<label class="switch">
								<input type="checkbox" data-param="&s" onchange="updateLink(3,this, true);">
								<span class="slider"></span>
							</label><span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext" style="width: 10em;">This can cause audio clicking issues</span></span> 
							<span data-translate="pro-audio-mode">Pro-audio mode</span>
							<br />
							
							<label class="switch">
								<input type="checkbox" id="codech264toggle" data-param="&codec=h264" onchange="updateLink(3,this, true);">
								<span class="slider"></span>
							</label><span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>💉<span class="tooltiptext" style="width: 10em; background-color: #77C"><span data-translate="this-can-reduce-packet-loss">Can reduce packet loss video corruption in OBS on PC</span></span></span> 
							<span data-translate="use-h264-codec">Use H264 codec</span>
							
						</div>
						<div style="display:inline-block;margin-top: 12px; position: relative; margin-right:10px; ">
							
							<label class="switch" title="The active speakers are made visible automatically">
							  <input type="checkbox" data-param="&sas" onchange="updateLink(3,this);">
							  <span class="slider"></span>
							</label>
							<span data-translate="show-active-speakers">Show active speakers</span>
							<br />
							
							<label class="switch" title="Set the background color to bright green">
							  <input type="checkbox" data-param="&chroma" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span data-translate="green-background">Green background</span>
							<br />
							
							<label class="switch" title="Fade videos in over 500ms">
							  <input type="checkbox" data-param="&fadein" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span data-translate="fade-videos-in">Fade-in videos</span>
							<br />
							
							<label class="switch" title="Videos use an animated transition when being remixed">
							  <input type="checkbox" data-param="&animate" onchange="updateLink(3,this);">
							  <span class="slider"></span>
							</label>
							<span data-translate="animate-mixing">Animate mixing</span>
							
						</div>
						
						<div  style="display:inline-block;margin-top: 12px; position: relative; margin-right:10px;">
							<label class="switch">
							  <input type="checkbox" data-param="&sl" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span data-translate="show-display-names">Show display names</span>
							<br />
							
							<label class="switch" title="Add a 10px margin around all video elements">
							  <input type="checkbox" data-param="&margin" onchange="updateLink(3,this);">
							  <span class="slider"></span>
							</label>
							<span data-translate="add-margin">Add margin to videos</span>
							<br />
							
							<label class="switch">
							  <input type="checkbox" data-param="&vb=20000" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext">This can cause video playback to lag</span></span>
							<span data-translate="unlock-video-bitrate">Unlock video bitrate</span>
							<br />
							
							<label class="switch" title="Disable fit-to-window optmized video scaling for added sharpness; increases CPU / Network load though.">
							  <input type="checkbox" data-param="&scale=100" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span class="tooltip" style='cursor: help;position:relative;bottom:2px;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus, Code2000, Code2001, Code2002, Musica, serif, LastResort;'>⚠<span class="tooltiptext">This can cause higher CPU load for everyone in the room</span></span>
							<span data-translate="disable-downscaling">Increase sharpness</span>
						</div>
						
						<div  style="display:inline-block;margin-top: 12px; position: relative; ">
							<label class="switch" title="Playback the video with mono-channel audio">
							  <input type="checkbox" data-param="&mono" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span data-translate="force-mono-audio">Force mono audio</span>
							<br />
							
							<label class="switch" title="Have the videos fit their respective areas, even if it means cropping a bit">
							  <input type="checkbox" data-param="&cover" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span data-translate="fill-video-space">Crop video to fit</span>
							<br />
							
							<label class="switch" title="Have videos be aligned with sizing designed for vertical video">
							  <input type="checkbox" data-param="&916" onchange="updateLink(3,this, true);">
							  <span class="slider"></span>
							</label>
							<span data-translate="vertical-aspect-ratio">Vertical video mode</span>
						</div>
					</div>
				</div>
				<a href="https://params.vdo.ninja" style="color:#888;" target="_blank" >
					<div style="display: block;float:right;font-size:70%;z-index:30;bottom:6px;right:10px;position:relative;color:#888;" ><span data-translate="learn-more-about-params">Learn more about URL parameters at </span><span style="text-decoration: underline;">params.vdo.ninja</span>
					</div>
				</a>
			</div>
			<div id="hiddenElements"></div>
			<div id='guestFeeds' style="display:none">
				<div id='deleteme'>
					<div class='vidcon directorMargins' id='fakeguest1' style='min-height: 300px;text-align: center;'><h2><span data-translate="guest-1">Guest 1</span></h2><i class='las la-user-circle' style='font-size:8em; margin: 20px 0px;' aria-hidden='true'></i></div>
					<div class='vidcon directorMargins' id='fakeguest2' style='min-height: 300px;text-align: center;'><h2><span data-translate="guest-2">Guest 2</span></h2><i class='las la-user-circle' style='font-size:8em; margin: 20px 0px;' aria-hidden='true'></i></div>
					<div class='vidcon directorMargins' id='fakeguest3' style='min-height: 300px;text-align: center;'><h2><span data-translate="guest-3">Guest 3</span></h2><i class='las la-user-circle' style='font-size:8em; margin: 20px 0px;' aria-hidden='true'></i></div>
					<div class='vidcon directorMargins' id='fakeguest4' style='min-height: 300px;text-align: center;'><h2><span data-translate="guest-4">Guest 4</span></h2><i class='las la-user-circle' style='font-size:8em; margin: 20px 0px;' aria-hidden='true'></i></div>
				</div>
			</div>
		</div>
		
		<div id="hiddenElements"></div>
		<div id="overlayClockContainer" data-menu='context-menu-clock' data-initial="600" class="hidden"><span id="overlayClock"></span></div>
		<div id="overlayClockContainer2" data-menu='context-menu-clock' data-initial="600" class="hidden"><span id="overlayClock2"></span></div>
		<div id="overlayMsgs" onclick="this.innerHTML = '';" style="display:none"></div>
		<div id="stickyMsgs" class="hidden"></div>
		<div id="bigPlayButton" onclick="this.innerHTML = '';" style="display:none"></div>

		<!-- Guest & Director Control-Buttons Box -->
		<div id="controls_blank" class="hidden controlCenterBox">
			<div class="controlsGrid">
				<!-- Volume & Mute Controls -->
				<div class="row fourth">
					<span class="tooltip" style="border: 0;">
						<input data-action-type="volume" type="range" min="0" max="200" value="100" title="Remotely change the volume of this guest; updates on release. Dbl-click to reset." oninput="remoteVolumeUI(this)" onchange="remoteVolume(this);" ondblclick="this.value=100;remoteVolume(this);remoteVolumeUI(this);" />
						<span class="tooltiptext" style='overflow: auto;left: 35%;width: 3em;top: -15px;margin: 0;position: absolute;font-family:"Noto Color Emoji", "Apple Color Emoji", "Segoe UI Emoji", Times, Symbola, Aegyptus,Code2000, Code2001, Code2002, Musica, serif, LastResort;' >100</span>
					</span>
					<button data-action-type="mute-guest" class="center" value="0" title="Mute this guest everywhere" onclick="remoteMute(this, event);">
						<i class="las la-microphone-slash"></i><span data-translate="mute">Mute</span>
					</button>
				</div>
				<!-- General Controls -->
				<div class="row two"> 
                    <!-- Video Feed Quality -->
                    <div class="row three advanced">
                        <button class="" data-action-type="change-quality1" title="Disable Video Preview" onclick="toggleQualityDirector(0, this.dataset.UUID, this);">
                            <i class="las la-video-slash"></i>
                        </button>
                        <button class="pressed" data-action-type="change-quality2" title="Low-Quality Preview" onclick="toggleQualityDirector(50, this.dataset.UUID, this);">
                            <i class="las la-video"></i>
                        </button>
                        <button class="" data-action-type="change-quality3" title="High-Quality Preview" onclick="toggleQualityDirector(1200, this.dataset.UUID, this);">
                            <i class="las la-binoculars"></i>
                        </button>
                    </div>
					<button data-action-type="direct-chat" class="mainonly" title="Send a Direct Message to this user." onclick="directorSendMessage(this);">
						<i class="las la-envelope"></i>
						<span data-translate="send-direct-chat">Message</span>
					</button>

					<!-- Messaging integrated menu -->
					<span class="director-message-box hidden" data-action-type="messaging-box">
						<textarea data-action-type="messaging-box-text" placeholder="Enter your message here"></textarea>
						
						<span data-action-type="messaging-box-toggle" title="Toggle between the message appearing as a large overlay and as normal chat">
							<i class="las la-bell" style="font-size:170%; color:#FFF; cursor:pointer;"></i>
						</span>
						<button class="message-close" data-action-type="messaging-box-close">
							<i class="las la-times"></i>
							<span data-translate="close">close</span>
						</button>
						<button class="message-send" data-action-type="messaging-box-send">
							<i class="las la-reply"></i>
							<span data-translate="send-message">send message</span>
						</button>
					</span>	

					<button data-action-type="forward" class="mainonly advanced" title="Move the user to another room, controlled by another director" onclick="directMigrate(this, event);">
						<i class="las la-paper-plane"></i>
						<span data-translate="forward-to-room">Transfer</span>
					</button>
					<button data-action-type="hangup" class="mainonly"  title="Force the user to Disconnect. They can always reconnect." onclick="directHangup(this, event);">
						<i class="las la-sign-out-alt"></i>
						<span data-translate="disconnect-guest">Hangup</span>
					</button>
                </div>
                <div class="flexBreak"></div>
				<div class="row three"> 
					<button data-action-type="solo-chat" class="mainonly advanced" title="Toggle solo voice chat or hold CTRL/CMD when selecting to make it two-way private." onclick="session.toggleSoloChat(this.dataset.UUID, event);">
						<i class="las la-microphone"></i>
						<span data-translate="voice-chat">Solo Talk</span>
					</button>
					<button data-action-type="solo-video" class="advanced" title="Solo this video everywhere. (Hold CTRL/CMD to just make video larger)" onclick="requestInfocus(this, event);">
						<i class="las la-user"></i>
						<span data-translate="solo-video">Highlight</span>
					</button>
                    <button data-action-type="mute-video-guest" class="advanced" title="Disable this guest's video track" onclick="remoteMuteVideo(this, event);">
                        <i class="las la-video-slash"></i>
                        <span data-translate="mute-video-guest">Video off</span>
                    </button>
                    <button class="mainonly advanced" data-action-type="toggle-remote-speaker" title="Toggle the remote guest's speaker output" onclick="remoteSpeakerMute(this, event);">
                        <i class="las la-volume-off"></i> <span data-translate="toggle-remote-speaker">Deafen</span>
                    </button>
                    <button class="advanced" data-action-type="hide-guest" title="Hide this guest everywhere" onclick="remoteHideVideo(this, event);">
                        <i class="las la-user-slash"></i>
                        <span data-translate="hide-guest">Hide</span>
                    </button>
                    <button class="mainonly advanced" data-action-type="toggle-remote-display" title="Toggle the remote guest's display output" onclick="remoteDisplayMute(this, event);">
                        <i class="las la-eye-slash"></i> <span data-translate="toggle-remote-display">Blind</span>
                    </button>
					<button data-action-type="addToScene" class="advanced" title="Add this Video to any remote '&scene=1'" data-scene="1" onclick="directEnable(this, event);">
						<i class="las la-plus-square"></i>
						<span data-translate="add-to-scene">add to scene 1</span>
					</button>
                </div>
				<button class="hideDropMenu advanced" onclick="toggleByDataset('1');getById('chevarrow3').classList.toggle('bottom');getById('chevarrow3').classList.toggle('right');">
					<i id="chevarrow3" class="chevron right" aria-hidden="true"></i>
					<span data-translate="scene-options">Scene options</span>
				</button>
				<div class="group hidden" data-cluster="1">
					<!-- Scene Controls -->
					<div class="row two">
                       <button data-action-type="addToScene" class="advanced" title="Add this Video to any remote '&scene=2'" data-scene="2" onclick="directEnable(this, event);">
							<i class="las la-plus-square"></i>
							<span data-translate="add-to-scene2">add to scene 2</span>
						</button>
						<button data-action-type="mute-scene" title="Remotely Mute this Audio in all remote '&scene' views" onclick="directMute(this, event);">
							<i class="las la-microphone-slash"></i>
							<span data-translate="mute-scene">mute in scenes</span>
						</button>
					</div>

					<!-- Row of Scenes -->
					<div class="row six advanced sceneButtons">
						<button class="btn-HL-peach" data-action-type="addToScene" data-scene="3" title="Add to Scene 3" onclick="directEnable(this, event);">
							<span>S3</span>
						</button>
						<button class="btn-HL-peach" data-action-type="addToScene" data-scene="4" title="Add to Scene 4" onclick="directEnable(this, event);">
							<span>S4</span>
						</button>
						<button class="btn-HL-peach" data-action-type="addToScene" data-scene="5" title="Add to Scene 5" onclick="directEnable(this, event);">
							<span>S5</span>
						</button>
						<button class="btn-HL-peach" data-action-type="addToScene" data-scene="6" title="Add to Scene 6" onclick="directEnable(this, event);">
							<span>S6</span>
						</button>
						<button class="btn-HL-peach" data-action-type="addToScene" data-scene="7" title="Add to Scene 7" onclick="directEnable(this, event);">
							<span>S7</span>
						</button>
						<button class="btn-HL-peach" data-action-type="addToScene" data-scene="8" title="Add to Scene 8" onclick="directEnable(this, event);">
							<span>S8</span>
						</button>
					</div>
					
					<!-- Row of Scenes -->
					<div class="row eight advanced sceneButtons">
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="1" title="Isolate to audio channel 1" onclick="directAudioChannel(this, event);">
							<span>C1</span>
						</button>
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="2" title="Isolate to audio channel 2" onclick="directAudioChannel(this, event);">
							<span>C2</span>
						</button>
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="3" title="Isolate to audio channel 3" onclick="directAudioChannel(this, event);">
							<span>C3</span>
						</button>
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="4" title="Isolate to audio channel 4" onclick="directAudioChannel(this, event);">
							<span>C4</span>
						</button>
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="5" title="Isolate to audio channel 5" onclick="directAudioChannel(this, event);">
							<span>C5</span>
						</button>
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="6" title="Isolate to audio channel 6" onclick="directAudioChannel(this, event);">
							<span>C6</span>
						</button>
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="7" title="Isolate to audio channel 7" onclick="directAudioChannel(this, event);">
							<span>C7</span>
						</button>
						<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="8" title="Isolate to audio channel 8" onclick="directAudioChannel(this, event);">
							<span>C8</span>
						</button>
					</div>

                    <button data-action-type="stats-remote" title="Request the statistics of this video in any active scene" onclick="toggleSceneStats(this);">
                        <i class="las la-info-circle"></i>
                        <span data-translate="stats-remote">Scene Stats</span>
                    </button>
                    <!-- Graph Section for Scenes -->
					<div class="row two advanced">
                        <span class="graphSection hidden" data-action-type="stats-graphs-bitrate" >
                            <span class="hidden" data-message="true" data-no-scenes="true">No scenes active</span>
                        </span>
                        <span class="graphSection hidden" data-action-type="stats-graphs-details" >
                            <span class="hidden" data-no-scenes="true"></span>
                            <span data-action-type="stats-graphs-details-container" class="hidden">
                                <span class="hidden" data-scene-name="true">scene</span>
                                <span class="hidden" data-bitrate="true">bitrate (kbps)</span>
                                <span class="hidden" data-resolution="true">resolution</span>
                                <span class="hidden" style="word-break: break-all;" data-video-codec="true">video codec</span>
                            </span>
                        </span>
                    </div>
                </div>
				
				<button class="hideDropMenu advanced" onclick="toggleByDataset('2');getById('chevarrow4').classList.toggle('bottom');getById('chevarrow4').classList.toggle('right');">
					<i id="chevarrow4" class="chevron right" aria-hidden="true"  ></i>
					<span data-translate="additional-controls">Additional Controls</span>
				</button>
				<div class="group hidden" data-cluster="2">
					<!-- General Controls -->
					<div class="row two">
						<!-- Mix Order Control -->
						<span class="row three advanced" data-action-type="ordering">
							<button class="center" data-action-type="order-down" title="Shift this Video Down in Order" onclick="changeOrder(-1,this.dataset.UUID);">
								<span data-translate="order-down"><i class="las la-minus"></i></span>
							</button>
							<span class="orderspan">
								<p style="text-align: center;font-size: 150%;" data-action-type="order-value" title="Current Index Order of this Video">0</p>
								<p class="order-label">Mix Order</p>
							</span>
							<button class="center" data-action-type="order-up" title="Shift this Video Up in Order" onclick="changeOrder(1,this.dataset.UUID);">
								<i class="las la-plus"></i>
							</button>
						</span>
						<button class="mainonly advanced" data-action-type="create-timer"  title="Set a countdown timer that this guest sees. CTRL (cmd) + click to pause." onclick="directTimer(this, event);">
							<i class="las la-clock"></i>
							<span data-translate="create-timer">Create Timer</span>
						</button>
						<button data-action-type="recorder-local" title="Start Recording this remote stream to this local drive. *experimental*'" onclick="recordVideo(this, event)">
							<i class="las la-compact-disc"></i>
							<span data-translate="record-local"> Record Local</span>
						</button>
						<button data-action-type="recorder-remote" title="The Remote Guest will record their local stream to their local drive. *experimental*" onclick="requestVideoRecord(this)">
							<i class="las la-compact-disc"></i>
							<span data-translate="record-remote"> Record Remote</span>
						</button>
						<button data-action-type="recorder-google-drive-remote" title="The Remote Guest will record their local stream and upload it to your Google Drive. *experimental*" onclick="requestGoogleDriveRecord(this)">
							<i class="las la-compact-disc"></i>
							<span data-translate="google-drive-record"> Google Drive</span>
						</button>
						<button  class="mainonly" data-action-type="change-params" style="display:none" title="Change user parameters" onclick="promptUser('transferSettingsTemplate', this.dataset.UUID);">
							<i class="las la-cog"></i>
							<span data-translate="change-params">URL Params</span>
						</button>
						<button class="mainonly advanced" data-action-type="change-url" title="Remotely reload the guest's page with a new URL" onclick="directPageReload(this, event);">
							<i class="las la-sync"></i>
							<span data-translate="change-url">Change URL</span>
						</button>
						<button  class="mainonly advanced" data-action-type="open-file-share"  title="Allow the guest to select a file to upload to the director. Once shared, it will show in the chat as a download link." onclick="requestFileUpload(this)">
							<i class="las la-file-upload"></i>
							<span data-translate="request-upload"> Request File</span>
						</button>
						
						<button class="mainonly advanced" data-action-type="force-keyframe" title="Force the remote sender to issue a keyframe to all scenes, fixing Pixel Smearing issues." onclick="requestKeyframeScene(this);">
							<span data-translate="force-keyframe"> Rainbow Puke Fix</span>
						</button>
						<button  class="mainonly advanced" data-action-type="mirror-guest"  title="Mirror the video of this guest globally" onclick="requestMirrorGuest(this)">
							🪞
							<span data-translate="mirror-guest"> Mirror Video</span>
						</button>
						<button  class="mainonly advanced" data-action-type="rotate-guest"  title="Rotate the video of this guest globally" onclick="requestRotateGuest(this);">
							🔃
							<span data-translate="rotate-guest"> Rotate Video</span>
						</button>
					</div>
					
					<!-- Row of Groups -->
					<div class="row advanced" style="justify-content: center;">
						<button class="btn-HL-green" data-action-type="toggle-group" data-group="1" title="Add/remove from group 1" onclick="changeGroup(this);">
							<span>Group 1</span>
						</button>
						<button class="btn-HL-green" style="flex: 0 11%;" data-action-type="toggle-group" data-group="2" title="Add/remove from group 2" onclick="changeGroup(this);">
							<span>G2</span>
						</button>
						<button class="btn-HL-green" style="flex: 0 11%;"data-action-type="toggle-group" data-group="3" title="Add/remove from group 3" onclick="changeGroup(this);">
							<span>G3</span>
						</button>
						<button class="btn-HL-green" style="flex: 0 11%;"data-action-type="toggle-group" data-group="4" title="Add/remove from group 4" onclick="changeGroup(this);">
							<span>G4</span>
						</button>
						<button class="btn-HL-green" style="flex: 0 11%;"data-action-type="toggle-group" data-group="5" title="Add/remove from group 5" onclick="changeGroup(this);">
							<span>G5</span>
						</button>
						<button class="btn-HL-green" style="flex: 0 11%;"data-action-type="toggle-group" data-group="6" title="Add/remove from group 6" onclick="changeGroup(this);">
							<span>G6</span>
						</button>
						<button class="btn-HL-green" style="flex: 0 11%;"data-action-type="toggle-group" data-group="7" title="Add/remove from group 7" onclick="changeGroup(this);">
							<span>G7</span>
						</button>

					</div>
					<!-- Row of Channels -->
					<div class="row advanced">
						<span style="flex: 1 21%;color: lightgreen; margin: auto 0;">Monitor Mix</span>
						<button class="btn-HL-paleblue" style="flex: 1 21%;" data-action-type="add-channel" title="Listen to this guest via your left audio speaker (Audio Channel 1)" onclick="changeChannelOffset(this.dataset.UUID, 0);">
							<span>Your Left</span>
						</button>
						<button class="btn-HL-paleblue" style="flex: 1 21%;" data-action-type="add-channel" title="Listen to this guest via your right audio speaker (Audio Channel 2)" onclick="changeChannelOffset(this.dataset.UUID, 1);">
							<span>Your Right</span>
						</button>
					</div>
					<div class="row advanced" title="This guest will only hear audio from your left or right mic channel. Make everyone has &stereo=1 added to their URL to enable two-channel audio.">
						<span style="flex: 1 21%; color: #F44; margin:auto 0;">PGM / Mic</span>
						<button class="btn-HL-paleblue" style="flex: 1 21%;" data-action-type="isolate-channel" title="This guest will only hear audio your channel 1 mic source. Make everyone has &stereo=1 added to their URL to enable two-channel audio." data-channel="1" onclick="directIsolateChannel(this.dataset.UUID, 1);">
							<span>Channel 1</span>
						</button>
						<button class="btn-HL-paleblue" style="flex: 1 21%;" data-action-type="isolate-channel" title="This guest will only hear audio your channel 2 mic source. Make everyone has &stereo=1 added to their URL to enable two-channel audio."  data-channel="2" onclick="directIsolateChannel(this.dataset.UUID, 2);">
							<span>Channel 2</span>
						</button>
					</div>
				</div>
				<div class="row two"> 
                    <!-- Further Audio/Video Settings -->
                    <div class="row two settingsWrapper" data-cluster="3">
                        <button data-action-type="advanced-audio-settings" data-active="false" title="Remote Audio Settings" onclick="requestAudioSettings(this);">
                            <i class="las la-sliders-h"></i>
                            <span data-translate="advanced-audio-settings">Audio settings</span>
                        </button>
                        <button class="mainonly" data-action-type="advanced-camera-settings" data-active="false" title="Advanced Video Settings" onclick="requestVideoSettings(this);">
                            <i class="las la-sliders-h"></i>
                            <span data-translate="advanced-camera-settings">Video settings</span>
                        </button>
                    </div>
				</div>
				<div class='row one hidden advancedAudioSettings'></div>
				<div class='row one hidden advancedVideoSettings'></div>
			</div>
		</div>
		
		<!-- &ShowDirector Control-Buttons Box -->
		<div id="controls_directors_blank" class="hidden controlCenterBox">
			<div class="controlsGrid">
				<!-- General Controls -->
				<div class="row two"> 
					<button data-action-type="recorder-local" title="Start Recording this remote stream to this local drive. *experimental*'" onclick="recordLocalVideoToggle();">
						<i class="las la-compact-disc"></i>
						<span data-translate="record-director-local"> Record</span>
					</button> 
					<button data-action-type="mute-scene" title="Remotely Mute this Audio in all remote '&scene' views" onclick="directMute(this, event);">
						<i class="las la-microphone-slash"></i>
						<span data-translate="mute-scene">mute in scene</span>
					</button>
					<button data-action-type="solo-video" class="" title="Solo this video everywhere. (Hold CTRL/CMD to just make video larger)" onclick="requestInfocus(this, event);">
						<i class="las la-user"></i>
						<span data-translate="solo-video-director">Highlight</span>
					</button>
					<button data-action-type="addToScene" data-scene="1" class="" title="Add this Video to any remote '&scene=1'" onclick="directEnable(this, event, true);">
						<i class="las la-plus-square"></i>
						<span data-translate="add-to-scene">add to scene 1</span>
					</button>
				</div>
				
				
				<!-- Row of Scenes -->
				<div class="row six advanced">
					<button class="btn-HL-peach" data-action-type="addToScene" data-scene="2" title="Add to Scene 2" onclick="directEnable(this, event);">
						<span>S2</span>
					</button>
					<button class="btn-HL-peach" data-action-type="addToScene" data-scene="3" title="Add to Scene 3" onclick="directEnable(this, event);">
						<span>S3</span>
					</button>
					<button class="btn-HL-peach" data-action-type="addToScene" data-scene="4" title="Add to Scene 4" onclick="directEnable(this, event);">
						<span>S4</span>
					</button>
					<button class="btn-HL-peach" data-action-type="addToScene" data-scene="5" title="Add to Scene 5" onclick="directEnable(this, event);">
						<span>S5</span>
					</button>

					<button class="btn-HL-peach" data-action-type="addToScene" data-scene="6" title="Add to Scene 6" onclick="directEnable(this, event);">
						<span>S6</span>
					</button>
					<button class="btn-HL-peach" data-action-type="addToScene" data-scene="7" title="Add to Scene 7" onclick="directEnable(this, event);">
						<span>S7</span>
					</button>
				</div>
				
				<div class="group advanced" data-cluster="1">
					<button data-action-type="stats-remote" title="Request the statistics of this video in any active scene" onclick="toggleSceneStats(this);">
						<i class="las la-info-circle"></i>
						<span data-translate="stats-remote">Scene Stats</span>
					</button>
					
					<!-- Graph Section for Scenes -->
					<div class="row two advanced">
						<span class="graphSection hidden" data-action-type="stats-graphs-bitrate" >
							<span class="hidden" data-message="true" data-no-scenes="true">No scenes active</span>
						</span>
						<span class="graphSection hidden" data-action-type="stats-graphs-details" >
							<span class="hidden" data-no-scenes="true"></span>
							<span data-action-type="stats-graphs-details-container" class="hidden">
								<span class="hidden" data-scene-name="true">scene</span>
								<span class="hidden" data-bitrate="true">bitrate (kbps)</span>
								<span class="hidden" data-resolution="true">resolution</span>
								<span class="hidden" style="word-break: break-all;" data-video-codec="true">video codec</span>
							</span>
						</span>
					</div>
				</div>
				
				<!-- Row of Scenes -->
				<div class="row eight advanced sceneButtons">
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="1" title="Isolate to audio channel 1" onclick="directAudioChannel(this, event, true);">
						<span>C1</span>
					</button>
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="2" title="Isolate to audio channel 2" onclick="directAudioChannel(this, event, true);">
						<span>C2</span>
					</button>
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="3" title="Isolate to audio channel 3" onclick="directAudioChannel(this, event, true);">
						<span>C3</span>
					</button>
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="4" title="Isolate to audio channel 4" onclick="directAudioChannel(this, event, true);">
						<span>C4</span>
					</button>
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="5" title="Isolate to audio channel 5" onclick="directAudioChannel(this, event, true);">
						<span>C5</span>
					</button>
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="6" title="Isolate to audio channel 6" onclick="directAudioChannel(this, event, true);">
						<span>C6</span>
					</button>
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="7" title="Isolate to audio channel 7" onclick="directAudioChannel(this, event, true);">
						<span>C7</span>
					</button>
					<button class="btn-HL-paleblue" data-action-type="sceneAudioChannel" data-channel="8" title="Isolate to audio channel 8" onclick="directAudioChannel(this, event, true);">
						<span>C8</span>
					</button>
				</div>
				
				<!-- Row of Groups -->
				<div class="row six advanced">
					<button class="btn-HL-green" data-action-type="toggle-group" data-group="1" title="Add/remove from group 1" onclick="changeGroupDirector(this);">
						<span>G1</span>
					</button>
					<button class="btn-HL-green" data-action-type="toggle-group" data-group="2" title="Add/remove from group 2" onclick="changeGroupDirector(this);">
						<span>G2</span>
					</button>
					<button class="btn-HL-green" data-action-type="toggle-group" data-group="3" title="Add/remove from group 3" onclick="changeGroupDirector(this);">
						<span>G3</span>
					</button>
					<button class="btn-HL-green" data-action-type="toggle-group" data-group="4" title="Add/remove from group 4" onclick="changeGroupDirector(this);">
						<span>G4</span>
					</button>
					<button class="btn-HL-green" data-action-type="toggle-group" data-group="5" title="Add/remove from group 5" onclick="changeGroupDirector(this);">
						<span>G5</span>
					</button>
					<button class="btn-HL-green" data-action-type="toggle-group" data-group="6" title="Add/remove from group 6" onclick="changeGroupDirector(this);">
						<span>G6</span>
					</button>
				</div>
				
				<!-- Mix Order Control -->
				<span class="row three advanced" data-action-type="ordering">
					<button class="center" data-action-type="order-down" title="Shift this Video Down in Order" onclick="changeOrderDirector(-1);">
						<span data-translate="order-down"><i class="las la-minus"></i></span>
					</button>
					<span class="orderspan">
						<p style="text-align: center;font-size: 150%;" data-action-type="order-value-director" title="Current Index Order of this Video">0</p>
						<p class="order-label">Mix Order</p>
					</span>
					<button class="center" data-action-type="order-up" title="Shift this Video Up in Order" onclick="changeOrderDirector(1);">
						<i class="las la-plus"></i>
					</button>
				</span>
				<div class="row two"> 
                    <!-- Further Audio/Video Settings -->
                    <div class="row two settingsWrapper" data-cluster="3">
                        <button data-action-type="advanced-audio-settings" data-active="false" title="Remote Audio Settings" onclick="toggleAudioUser();event.preventDefault();event.stopPropagation();return false;">
                            <i class="las la-sliders-h"></i>
                            <span data-translate="advanced-audio-settings">Audio settings</span>
                        </button>
                        <button class="mainonly" data-action-type="advanced-camera-settings" data-active="false" title="Advanced Video Settings" onclick="toggleVideoUser();event.preventDefault();event.stopPropagation();return false;">
                            <i class="las la-sliders-h"></i>
                            <span data-translate="advanced-camera-settings">Video settings</span>
                        </button>
                    </div>
				</div>
			</div>	
		</div>
		
		<div id="popupSelector" style="display:none;">

				<span id="videoMenu3">
                    <div class="title">
                        <i class="las la-video"></i><span data-translate="video-source"> Video Source: </span>
                    </div>
					<span style="display:inline-block;">
						<select id="videoSource3" ></select>			
						<span id="refreshVideoButton" title="Activate or Reload this video device.">
							<i class="las la-sync-alt"></i>
						</span>
						<span id="gear_webcam3" style="display: none; cursor:pointer;" onclick="toggleQualityGear3();">
							<i class="las la-cog" style="font-size: 135%; top:1px; vertical-align: middle;" aria-hidden="true"></i>
						</span>
					</span>
					<span id="videoSettings3" style="display: none;">
						<center>
						<form id="webcamquality3">
							<input type="radio" id="fullhd3" name="resolution" value="0" />
							<label for="fullhd3">
								<span data-translate="max-resolution">High Quality</span>
							</label> |
							
							<input type="radio" checked id="halfhd3" name="resolution" value="1" />
							<label for="halfhd3">
								<span data-translate="balanced">Balanced</span>
							</label> |
							
							<input type="radio" id="nothd3" name="resolution" value="2" />
							<label for="nothd3">
								<span data-translate="smooth-cool">Smooth and Cool</span>
							</label>
							<div id="webcamstats3" style="padding: 5px 0 0 0;"></div>
						</form>
						</center>
					</span>
				</span>
				
				<div id="audioMenu2" class="form-group multiselect" alt="tip: Hold CTRL (command) to select Multiple" title="tip: Hold CTRL (command) to select Multiple" >
					<span class='gear_microphone gearflat hidden'>
						<input type="checkbox" id='micStereoMonoInput3' onchange="toggleMonoStereoMic(this);">Mono
					</span>
					<a id="multiselect-trigger3" class="form-control multiselect-trigger" >
						<div id="title" class="title">
							<i class="las la-microphone-alt"></i><span data-translate="select-audio-source"> Audio Source(s) </span>
							<i id="chevarrow2" class="chevron bottom" aria-hidden="true"></i>
							<div class="meter" id="meter3"></div><div class="meter2" id="meter4"></div>
						</div>
					</a>
					<ul id="audioSource3" class="multiselect-contents">
						<li>
						</li>
					</ul>
					
				</div>
				<br />
				<span id="headphonesDiv3" style="display: block;">
					<div class="title">
						<i class="las la-headphones"></i>
						<span data-translate="select-output-source"> Audio Output Destination: </span>
						<button onclick="playtone()" class="testtonebutton" type="button">Test</button>
					</div>
					<select id="outputSource3" ></select>
				</span>
				
				<div id="avatarDiv3" class="hidden">
						<div style="text-align: left;display: inline-block;">
							<i class="las la-robot"></i><span data-translate="select-avatar-image"> Default Avatar / Placeholder Image: </span>
						</div>
						<div id="selectAvatarImage3" style="margin-top:10px;">
							<img src="./media/avatar.webp" crossOrigin="Anonymous"  loading="lazy" id="defaultAvatar2" style="max-width:130px;max-height:73.5px;display:inline-block;margin:10px;cursor:pointer;" onclick="changeAvatarImage(event, this);"/>
							<label class="selected avatarSelection" id="noAvatarSelected3">
							  <i class="las la-minus-circle" style="font-size: 3em;"></i><br />No Image Selected
							  <button onclick="changeAvatarImage(event, this)" style="position: fixed; top: -100em; margin-left:10px; border:1px solid #555;"></button>
							</label>
							<label class="avatarSelection">
							  <i class="las la-hdd" style="font-size: 3em;"></i><br />Select Local Image
							  <input type="file" onchange="changeAvatarImage(event, this)" accept="image/*" style="position: fixed; top: -100em; margin-left:10px; border:1px solid #555;"> 
							</label>
						</div>
					</div>
				
				<span id="effectsDiv3" style="display: none; user-select: none;">
					<div class="title">
						<i class="las la-robot"></i>
						<span data-translate="select-digital-effect"> Digital Video Effects: </span>
					</div>
					<select id="effectSelector3" onchange="effectsDynamicallyUpdate(event, this);">
						<option value="0" data-translate="no-effects-applied">No effects applied</option>
						<option value="3" data-translate="blurred-background">Blurred background</option>
						<option value="13" class="hidden" disabled data-translate="blurred-background-2">Blurred background 2 🧪</option>
						<option value="4" data-translate="digital-greenscreen">Digital greenscreen</option>	
						<option value="5" data-translate="virtual-background">Virtual background</option>
						<option value="6" data-translate="face-mesh" title="experimental">Face mesh (slow load) 👨‍🔬</option>
						<option value="7" data-translate="digital-zoom">Digital zoom</option>
						<option value="overlay" data-translate="overlay-image">Overlay image</option>
						<option value="anon" data-translate="anonymous-mask" title="experimental">Anonymous mask 👨‍🔬</option>
						<option value="dog" data-translate="dog-face" title="experimental">Dog ears and nose 👨‍🔬</option>
						<option value="1" disabled title='Face Detection API not detected; you may be able to enable it here: chrome://flags/#enable-experimental-web-platform-features' class='facetracker' data-translate="face-tracker">Face tracker</option>
					</select>
					<span data-warnSimdNotice="true" style='display:none; font-size: 140%; margin-left:10px; vertical-align: middle; cursor:pointer' title="Improve performance and quality with this tip" onclick="smdInfo();">
						<i class="las la-info-circle"></i>
					</span>
					<div id="selectImageTFLITE3" style="display:none;margin-top:10px;">
						
					</div>
					<div id="selectImageOverlay3" style="display:none;margin-top:10px;">
						
					</div>
					<div id="selectEffectAmount3" style="display:none;margin-top:10px;">
						<label for="selectEffectAmountInput3" style="width: 113px;display: inline-block;">Effect amount:</label>
						<input id="selectEffectAmountInput3" style="display: inline-block;width: 350px; max-width: 60%;margin:6px 0;" name="selectEffectAmountInput3" title="Adjust the amount of effect applied" type="range" oninput="changeEffectAmount(event, this)" onchange="changeEffectAmount(event, this)" min="0" step="1" max="20">
					</div>
					
				</span>
				<button id="shareScreenGear" style="width: 135px; padding:20px;text-align:center;" onclick="grabScreen()"><b>Share Screen</b><br /><i style="padding:5px; font-size:300%;" class="las la-desktop"></i></button>
				
				<button id="pIpStartButton" style="width: 135px; background-color:#EFEFEF;padding:20px;text-align:center;display:none;"><b>Preview PiP VIdeo</b><br /><i style="padding:5px; font-size:300%;color:black;" class="las la-compress-arrows-alt"></i></button>
				
				
				<div class="hidden" id="grabDirectorSoloLinkParent" title="The solo view link of the Director's video.">
                    <div class="title">
                        <i class="las la-user"></i> Director's solo link:
                    </div>
                    <a onclick="copyFunction(this,event)" data-drag="1" draggable="true" id="grabDirectorSoloLink" data-menu="context-menu" class="task" ></a>
                </div>
				<br />
				<button onclick="toggleSettings()" class="toggleSettings"><i class="las la-chevron-right"></i><b><span data-translate="close-settings">Close Settings</span></b></button>
				
				<button id='advancedOptionsAudio' onclick="toggleAudioUser(this);" class="advancedToggle">
				<i class="las la-sliders-h" style="position:relative;"></i> <b>Audio</b></button>
				
				<button id='advancedOptionsCamera' onclick="toggleVideoUser(this);" class="advancedToggle">
				<i class="las la-sliders-h" style="position:relative;"></i> <b>Video</b></button>
				
				<button id='advancedOptionsGeneral' onclick="toggleUserUser(this);" >
				<i class="las la-user-cog" style="position:relative;"></i> <b><span data-translate="user">User</span></b></button>
				
				
				<span id="popupSelector_constraints_audio" class="popupSelector_constraints" style="display: none;">
				
				</span>
				<span id="popupSelector_constraints_video" class="popupSelector_constraints" style="display: none;">
				
				</span>
				<span id="popupSelector_constraints_loading" style="display: none; visibility:hidden">
					<i class='las la-spinner icn-spinner' style='margin:30px;font-size:400%;color:white;'></i>
				</span>
				
				<span id="popupSelector_user_settings" style="display: none; visibility:hidden">
					<span class="mobileHide">
						<label title="Choose a hotkey for Hold-to-Talk. If using Electron Capture, elevate privilleges to have it become global" data-translate="hold-to-talk" >Hold-to-Talk Hot-key</label>
						<input type="text" id="pptHotKey" placeholder="press a key here" style="padding-left: 7px;" onkeypress="event.preventDefault;event.stopPropagation();return false;" onkeyup="event.preventDefault;event.stopPropagation();return false;" onkeydown="setHotKey();"/>
						<button onclick="setHotKey(false);" style="margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;" data-translate="clear">Clear</button>
						<br /><br />
						<label title="Draw on the Screen">Draw-on-Screen</label>
						<button id='startDrawScreen' title="CTRL (cmd) + ALT + D to toggle" onclick="drawOnScreen();" style="margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;" data-translate="enable" >Enable</button>
						<button class='hidden drawActive' onclick="drawOnScreenObject.erase();" style="margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;" data-translate="clear">Clear</button>
						<button class='hidden drawActive' onclick="drawOnScreenObject.stop();" style="margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;" title="CTRL (cmd) + ALT + D to toggle" data-translate="stop">Stop</button>
						<button class='hidden drawActive' onclick="drawOnScreenObject.color(this);" data-color='red' style="background-color:red; margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;">✏️</button>
						<button class='hidden drawActive' onclick="drawOnScreenObject.color(this);" data-color='blue' style="background-color:blue; margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;">✏️</button>
						<button class='hidden drawActive' onclick="drawOnScreenObject.color(this);" data-color='green' style="background-color:green; margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;">✏️</button>
						<button class='hidden drawActive' onclick="drawOnScreenObject.color(this);" data-color='black' style="background-color:black; margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;">✏️</button>
						<button class='hidden drawActive' onclick="drawOnScreenObject.color(this);" data-color='white' style="background-color:white; margin: 0 0 0 4px; border-radius: 5px; padding: 3px 3px;">🎨</button>
						<br /><br />
						<button class="generalButton" onclick="cycleStyleOptions();" id='toggleWaveformButton' title="Audio-only sources can be stylized in different ways" data-translate="cycle-between-audio-visualizations">Cycle between several audio-visualizations styles</button>
						<br />
					</span>
					<button class="generalButton" onclick="clearStorage();" title="Clear site's local storage and settings" data-translate="cleaer-sites-local-storage">Clear site's local browser storage and saved settings</button>
					
				</span>
		</div>
		<nav id="context-menu" class="context-menu">
			<ul class="context-menu__items">
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="Open">
						<i class="las la-external-link"></i>
						<span data-translate="open-in-new-tab">Open in new tab</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="Copy">
						<i class="las la-paperclip"></i>
						<span data-translate="copy-to-clipboard" >Copy to clipboard</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="Edit">
						<i class="las la-pen"></i>
						<span data-translate="edit-url" >Edit URL manually</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="Publish">
						<i class="las la-tv"></i>
						<span data-translate="publish-url" >Publish via WHIP</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="RecordWindow">
						🔴
						<span data-translate="record-window" >Record as a Window</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="QRCode">
						📷
						<span data-translate="show-qr-code" >Show as QR Code</span>
					</a>
				</li>
			</ul>
		</nav>
		<nav id="context-menu-screen-share" class="context-menu">
			<ul class="context-menu__items">
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="SSNewTab">
						<i class="las la-external-link"></i>
						<span data-translate="open-ss-in-new-tab">Share from a new tab</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="ss1">
						1📷
						<span data-translate="ss-mode-1" >Screen Share Mode 1</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="ss2">
						2📷
						<span data-translate="ss-mode-2" >Screen Share Mode 2</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="ss3">
						3📷
						<span data-translate="ss-mode-3" >Screen Share Mode 3</span>
					</a>
				</li>
			</ul>
		</nav>
		<nav id="context-menu-clock" class="context-menu">
			<ul class="context-menu__items">
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="pip-clock">
						<i class="las la-external-link"></i>
						<span data-translate="detach-clock2-pip">Pop-out clock toggle</span>
					</a>
				</li>
			</ul>
		</nav>
		<nav id="context-menu-video" class="context-menu">
			<ul class="context-menu__items">
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="Mirror">
						<i class="las la-external-link"></i>
						<span data-translate="mirror-video">Mirror</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="Controls">
						<i class="las la-external-link"></i>
						<span data-translate="show-controls-video">Show control bar</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="HideControls">
						<i class="las la-external-link"></i>
						<span data-translate="hide-controls-video">Hide control bar</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="PiP">
						<i class="las la-external-link"></i>
						<span data-translate="picture-in-picture">Picture-in-picture</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="PiP2">
						<i class="las la-external-link"></i>
						<span data-translate="picture-in-picture-all">Picture-in-picture all</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="FullWindow">
						<i class="las la-external-link"></i>
						<span data-translate="full-window">Full-window</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="ShrinkWindow">
						<i class="las la-external-link"></i>
						<span data-translate="shrink-window">Shrink-window</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="Pause">
						<i class="las la-external-link"></i>
						<span data-translate="pause-stream">Pause stream</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="UnPause">
						<i class="las la-external-link"></i>
						<span data-translate="resume-stream">Resume stream</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="Record">
						<i class="las la-external-link"></i>
						<span data-translate="record-to-disk">Record to disk</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="StopRecording">
						<i class="las la-external-link"></i>
						<span data-translate="stop-record-to-disk">Stop Recording</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="CopyFrameAsImage">
						<i class="las la-external-link"></i>
						<span data-translate="copy-to-clipboard-frame">Snapshot to clipboard</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<a href="#" class="context-menu__link" data-action="SaveFrameToDisk">
						<i class="las la-external-link"></i>
						<span data-translate="save-current-frame">Save frame to disk</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="DrawOnVideo">
						<i class="las la-external-link"></i>
						<span data-translate="draw-on-video">Toggle draw mode</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="ShowStats">
						<i class="las la-external-link"></i>
						<span data-translate="show-video-stats">Show Stats</span>
					</a>
				</li>
				<li class="context-menu__item" title="Using this may cause audio-issues on some systems">
					<a href="#" class="context-menu__link" data-action="OutputAudio">
						<i class="las la-external-link"></i>
						<span data-translate="custom-audio-output">Audio Destination</span>
					</a>
				</li>
				<li class="context-menu__item hidden" id="RemoteHangupContextOption">
					<a href="#" class="context-menu__link" data-action="RemoteHangup">
						<i class="las la-external-link"></i>
						<span data-translate="remote-hangup-connection">Remote Hang-up</span>
					</a>
				</li>
				<li class="context-menu__item hidden" id="RemoteReloadContextOption">
					<a href="#" class="context-menu__link" data-action="RemoteReload">
						<i class="las la-external-link"></i>
						<span data-translate="remote-reload-connection">Remote Reload Page</span>
					</a>
				</li>
				<li class="context-menu__item">
					<a href="#" class="context-menu__link" data-action="ChangeBuffer">
						<i class="las la-external-link"></i>
						<span data-translate="change-playout-buffer">Change Buffer</span>
					</a>
				</li>
				<li class="context-menu__item hidden">
					<hr />
					<span href="#" class="context-menu__tip" data-action="TipRightClick">
						<small><i data-translate="hold-ctrl">tip:  <b>CTRL</b>(⌘) + <b>Click</b> for alt-menu</i></small>
					</span>
				</li>
			</ul>
		</nav>
				
		<div id="roomSettings" class="customModelPopup" style="display:none; user-select: none;">
			<div class="promptModalInner">
				<span class='modalClose' onclick="toggleRoomSettings();">×</span>
				<span class='modalClose' style="right:25px;" onclick="this.parentNode.parentNode.classList.toggle('pinToSide');getById('main').classList.toggle('makeSmallerDirectorRoom');">📌</span>
				<span></span>
				<h3 data-translate="change-room-settings">Change room settings</h3><br />
				
				<label title="⚠️ Increase this at your peril. This changes the incoming video quailty that guests in the room sees; mobile devices excluded. Set too high and the room may become unstable, leading to lost audio and disconnected guests." for="trbSettingInput" data-translate="change-room-video-quality">Change room video quality:</label>
				<span style="margin-left: 6px;" id="trbSettingInputFeedback"></span>-kbps
				<input id="trbSettingInput" type="range" min="0" max="4000" value="500" onchange="getById('trbSettingInputManual').value=this.value;changeTRB(this);" oninput="getById('trbSettingInputFeedback').innerHTML = this.value;" style="width:calc(100% - 60px);display:inline-block;" />
				<input id="trbSettingInputManual" min="0" value="500" onchange="getById('trbSettingInput').value=this.value;changeTRB(this);" oninput="getById('trbSettingInputFeedback').innerHTML = this.value;" style="width:42px;display:inline-block;text-align: center;" />
				
				<span id='limittotalbitrate_director' class="hidden">
					<label title="Sets YOUR max total allowed upload bandwidth; across all connections" for="ltbSettingInput" data-translate="limit-total-bitrate-quality">Your max allowed total video upload bandwidth:</label>
					<span style="margin-left: 6px;" id="ltbSettingInputFeedback"></span>-kbps
					<input id="ltbSettingInput" type="range" min="1" max="10000" onchange="getById('ltbSettingInputManual').value=this.value;changeLTB(this);" oninput="getById('ltbSettingInputFeedback').innerHTML = this.value;" style="width:calc(100% - 60px);display:inline-block;" />
					<input id="ltbSettingInputManual" min="1" value="10000" onchange="getById('ltbSettingInput').value=this.value;changeLTB(this);" oninput="getById('ltbSettingInputFeedback').innerHTML = this.value;" style="width:42px;display:inline-block;text-align: center;" />
				</span>
				
				<span style="margin: 20px 0 0 0;display:block" id='highlightDirectorSpan' title="Only the director's video will be visible to guests and within group scenes. (Hold CTRL/CMD to just make video larger)">
					<input id="highlightDirector" style="width: 15px; height: 15px; margin:10px;" name="highlightDirector"  data-action-type="solo-video" type="checkbox" onchange="requestInfocus(this, event);" />
					<label for="highlightDirector" data-translate="highlight-director-only-video-guests-will-see">Highlight Director (only video guests will see)</label> 
				</span>
				
				<span style="margin: 20px 0 0 0;display:block" id='globalTimerDirectorSpan'>
					<button data-action-type="create-timer-global" id="globalTimerDirectorToggle" title="Set a countdown timer that this guest sees. CTRL (cmd) + click to pause." onclick="directRoomTimer(this, event);">
						<i class="las la-clock"></i>
						<span data-translate="create-global-timer">Create Global Count-down Timer</span>
					</button>
					<button data-action-type="create-clock-global" title="Set a count-up timer that this guest sees. CTRL (cmd) + click to pause." onclick="directRoomClock(this, event);">
						<i class="las la-clock"></i>
						<span data-translate="create-clock-timer">Toggle Room Clock</span>
					</button>
				</span>
				
				<span style="margin: 5px 0 0 0;display:block" id='enableCodirector' title="Allow for remote co-directors">
					<span id="coDirectorEnableSpan">
						<input id="coDirectorEnable" style="width: 15px; height: 15px; margin:10px;" name="coDirectorEnable"  data-action-type="codirector" type="checkbox" onchange="toggleCoDirector(this);" />
						<label for="coDirectorEnable" data-translate="allow-for-remote-co-directors">Allow for remote co-directors</label> 
					</span>
					<span style="margin:0;display:none;" id='codirectorSettings'>
						<div>
							<input id="codirectorSettings_transfer" style="width: 15px; height: 15px; margin:10px;" name="codirectorSettings_transfer"  data-action-type="codirector_transfer" type="checkbox" onchange="toggleCoDirector_transfer(this);" />
							<label for="codirectorSettings_transfer" data-translate="allow-co-directors-to-transfer-guests">Allow co-directors to transfer guests</label> 
						</div>
						<div style="display:none;">
							<input id="codirectorSettings_changeurl" style="width: 15px; height: 15px; margin:10px; " name="codirectorSettings_changeurl"  data-action-type="codirector_changeurl" type="checkbox" onchange="toggleCoDirector_changeurl(this);" />
							<label for="codirectorSettings_changeurl" data-translate="allow-co-directors-to-change-a-guests-url">Allow co-directors to change a guest's URL</label> 
						</div>
						<div style="margin:8px;">
							<label for="codirectorSettings_invite" data-translate="basic-co-director-invite-link">Basic co-director invite link:</label>
							<input id="codirectorSettings_invite" style="display:block;width: 100%;margin: 3px 0; padding: 4px 5px 3px 5px; border: 1px solid black;" name="codirectorSettings_invite" value="some URL here" type="text"  />
						</div>
					</span>
				</span>
				
				
				<span style="margin: 5px 0 0 0;display:block" >
					<input id="widgetURCheck" style="width: 15px; height: 15px; margin:10px;" name="widgetURCheck"  data-action-type="widgetURCheck" type="checkbox" onchange="toggleWidgetURL(this);" />
					<label for="widgetURCheck">Embed a sidebar widget for all</label> 
					<input id="widgetURL" onmousedown="toggleWidgetURL(this);event.preventDefault" onclick="toggleWidgetURL(this);event.preventDefault" class="hidden" style="cursor:pointer; display:inline-block; margin: 3px 0; margin-left: 10px; min-width: 230px; padding: 4px 5px 3px 5px; border: 1px solid black;" name="widgetURL" placeholder="Enter a URL for the sidebar page" type="text"  />
				</span>
				
				
				<span style="margin: 5px 0 0 0;display:block">
					<button data-action-type="local-global-record" title="Record all the guests" onclick="localGlobalRecordStart();">
						<i class="las la-compact-disc"></i>
						<span data-translate="local-global-record-start">Local record - start all</span>
					</button>
					<button data-action-type="local-global-record" title="Record all the guests" onclick="localGlobalRecordStop();">
						<i class="las la-square"></i>
						<span data-translate="local-global-record-stop">Local record - stop all</span>
					</button>
				</span>
				<span style="margin: 5px 0 0 0;display:block">	
					<button data-action-type="remote-global-record" title="Record all the guests" onclick="remoteGlobalRecordStart();">
						<i class="las la-compact-disc"></i>
						<span data-translate="remote-global-record">Remote record - start all</span>
					</button>
					<button data-action-type="remote-global-record" title="Record all the guests" onclick="remoteGlobalRecordStop();">
						<i class="las la-square"></i>
						<span data-translate="remote-global-record">Remote record - stop all</span>
					</button>
				</span>
				
				
			</div>
		</div>
		
		<div id="bufferSettings" style="display:none; user-select: none;">
			<div class="promptModalInner">
				<span class='modalClose' onclick="toggleBufferSettings();">×</span>
				<span></span>
				<h3 data-translate="buffer-settings">Buffer Settings</h3><br />
				<div>
					<span data-translate="change-playout-buffer">Buffer (ms): </span><input data-buffer-value='0' style='margin-left: 3px;padding: 2px;width: 60px;' type='number' min='0' max='120000' /><br />
					<input type='range' min='0' max='10000' data-buffer-value='0' /><br />
				</div>
			</div>
		</div>
		
		<div id="publishSettings" style="display:none; user-select: none;">
			<div class="promptModalInner">
				<h3 data-translate="publish-settings">Publishing setup</h3>
				<br />
				<small>To publish this browser window, click the start publishing button below and then select the current browser window, with audio-selected if desired.  The stream will go live afterwards, automatically.</small>
				<form>
					<div id="publishOutURL" class="hidden">
						<br />
						<span style="min-width: 85px; display: inline-block;">
						WHIP URL
						</span>
						<input type="text" size="40" autocomplete="whip-out-url" placeholder="➡️ WHIP URL to publish to goes here">
						<br /><br />
					</div>
					
					<div id="publishOutToken" class="hidden">
						<span style="min-width: 85px; display: inline-block;">
						Auth Token
						</span>
						
						<input type="password" id="changeText1a" autocomplete="whip-out-bearer-token" size="40" placeholder="🗝️ Authentication Bearer Token (optional)" />
						
						<br /><br />
					</div>
					
					<div id="advanced" style="margin: 10px 0;">
						<select id="whipoutaudiobitrate"  title="Which audio bitrate target would you prefer?" >
							<option value="0" selected>🎙️Default Audio Bitrate</option>
							<option value="32">🎙️32-kbps</option>
							<option value="64">🎙️64-kbps</option>
							<option value="128">🎙️128-kbps</option>
							<option value="256">🎙️256-kbps</option>
						</select >
						<select id="whipoutvbrcbr" title="Constant audio bitrate or variable audio bitrate" >
							<option value="cbr" selected>🎙️CBR</option>
							<option value="vbr">🎙️VBR</option>
						</select >
						<select id="whipoutdenoise" title="Remove background noise, but may limit audio quality" >
							<option value="1" selected>🎙️Denoise On</option>
							<option value="0">🎙️Denoise Off</option>
						</select >
						<select id="whipoutautogain" title="Let the browser control the mic's gain automatically" >
							<option value="1" selected>🎙️Auto Gain On</option>
							<option value="0">🎙️Auto Gain Off</option>
						</select >
						<select id="whipoutstereo" title="Stereo audio or mono; must have denoise off for this to work." >
							<option value="1" selected>🎙️Stereo</option>
							<option value="0">🎙️Mono</option>
						</select >
					</div>
					<div style="margin: 10px 0px;">
						<select  id="whipoutbitrateGroupFlag" title="Which video bitrate target would you prefer?" >
							<option value="0" selected>🎦Default Video Bitrate</option>
							<option value="500">🎦500-kbps</option>
							<option value="2500">🎦2500-kbps</option>
							<option value="6000">🎦6000-kbps</option>
							<option value="20000">🎦20000-kbps</option>
						</select >
						<select id="whipoutcodecGroupFlag"  title="Which video codec would you prefer to be used if available?" >
							<option value="default" selected>🎦OpenH264</option>
							<option value="vp9">🎦VP9</option>
							<option value="h264">🎦H264</option>
							<option value="vp8">🎦VP8</option>
							<option value="av1">🎦AV1</option>
						</select >
					</div>
				</form>
				<br />
				<button class="gobutton green hidden" id="startPublishingButton" onclick='startPublishing();'>⬆️ Select window and start publishing</button>
				<button class="gobutton green hidden" id="startRecordingButton" onclick='startRecording();'>🔴 Select window and start recording</button>
				<br />
				<br /><br />
				
				<i>note: To stop the stream, simply close this browser window.</i>
			</div>
		</div>
		
		<div id="remoteOBSControl" class="customModelPopup" style="display:none;">
			<div class="promptModalInner">
				<span class='modalClose' onclick="toggleOBSControls();">×</span>
				<span></span>
				<h3 data-translate="remote-control-obs-menu">Remote Controller for OBS Studio</h3><br />
				<div id="obsControlHelp" class="hidden" style="margin: 10px 0;display:block" >
					No remote controllable instances of OBS Studio were found
				</div>
				<div id="obsControlButtons" style="margin: 10px 0;display:block" >
				</div>
				<div id="obsSceneNames" style="margin: 10px 0;display:block" >
				</div>
				<div id="obsRemotePassword" class="hidden" style="margin: 10px 0;display:block;" >
					<span style="font-size:117%"><i class="las la-key" style="margin: 10px;"></i>Remote OBS passcode:</span>
					<input style="margin:0 10px;display:inline-block;padding: 8px 10px 6px 10px;" placeholder="Enter the remote OBS password here" />
				</div>
				<small style="margin: 20px 0 0 0;display:block;" >
					See the <a href="https://docs.vdo.ninja/advanced-settings/upcoming-parameters/and-obs" style="cursor:pointer;" target="_blank">documentation</a> for help on using the remote OBS controller
				</small>
				<div id="debugRemoteOBSControl" class="hidden">
				</div>
			</div>
		</div>
		
		<div id="transferSettingsTemplate" style="display:none">
			<h3>Change guest settings</h3><br />
			<label class="switch" title="Cannot see videos">
			  <input type="checkbox" data-param="novideo" onchange=" ">
			  <span class="slider"></span>
			</label>
			Cannot see videos
			<br />
			<label class="switch" title="Cannot hear others">
			  <input type="checkbox" data-param="noaudio" onchange=" ">
			  <span class="slider"></span>
			</label>
			Cannot hear others
			<br />
			<label class="switch" title="See director only">
			  <input type="checkbox" data-param="broadcast" onchange=" ">
			  <span class="slider"></span>
			</label>
			Broadcast mode
			<br />
			<label class="switch" title="Show Mini preview">
			  <input type="checkbox" data-param="minipreview" onchange=" ">
			  <span class="slider"></span>
			</label>
			Mini preview
			<br />
			<label class="switch" title="Raise hand button">
			  <input type="checkbox" id="testD" data-param="raisehands" onchange=" ">
			  <span class="slider"></span>
			</label>
			Raise hand button
			<br />
			<label class="switch" title="Show labels">
			  <input type="checkbox" data-param="showlabels" onchange=" ">
			  <span class="slider"></span>
			</label>
			Show labels
			<br />
			<label class="switch" title="Transfer to a new Room">
			  <input type="checkbox" data-param="changeroom" onchange="toggle(this.parentNode.nextElementSibling, false, false);">
			  <span class="slider"></span>
			</label>
			Transfer to room
			<input type="text" style="display:none" data-param="roomid" class="largeTextEntry" placeholder="Enter the room name here" onkeypress="EnterButtonChat(event)" />
			<br />
			<label class="switch" title="Enable custom password">
			  <input type="checkbox" data-param="changepassword" onchange="toggle(this.parentNode.nextElementSibling, false, false);">
			  <span class="slider"></span>
			</label>
			Room password
			<input type="text" style="display:none" data-param="password" class="largeTextEntry" placeholder="Enter the room password here" onkeypress="EnterButtonChat(event)" />
			<br />
			<button style="width:120px; background-color: #fff; position: relative;border: 1px solid #999; margin: 0 0 0 55px;" onclick="changeGuestSettings(this.parentNode)" data-translate='apply-new-guest-settings'>Apply settings</button>
			<button style="width:120px; background-color: #fff; position: relative;border: 1px solid #999; margin: 0;" onclick="closeModal()" data-translate='cancel'>Cancel</button>
		</div>

		<div id="connectUsers">
			<div style="margin-bottom:5px"><u ><span data-translate="invisible-guests">Not Visible</span></u> 
			<span title="Hide this window" id='hideusers' style="cursor:pointer;font-size:1.2em; float: right;" onclick="getById('connectUsers').classList.add('hidden');getById('closedList_connectUsers').classList.remove('hidden');"><i class="las la-times"></i></span></div>
			<span style="height:5px;display:block;"></span>
			<div id="userList">
			</div>
		</div>
		
		<div id="callerMenu" class="hidden">
			<button><i class="las la-phone"></i> Hang up</button>
		</div>
		
		<div id="progressContainer" class="hidden">
			<div id="progressBar"></div>
		</div>
		
		<div id="signalMeterTemplate" class="signal-meter hidden" data-cpu="0" data-level="0">
			<i class="las la-signal"></i>
			<i class="las la-fire-alt"></i>
		</div>
		<input type='range' id="volumeControlTemplate" class="volume-control hidden" min="0" max="100" value="100">
		<div id="batteryMeterTemplate" class="battery hidden" data-plugged="1">
			<div class="battery-level" style="height:100%;"></div>
			<div class="battery-charging">+</div>
		</div>
		<div id="slotPicker" class="hidden">
			<h3>Assign to slot:</h3><br />
			<div data-slot="0">Unset</div>
			<div data-slot="1">Slot 1</div>
			<div data-slot="2">Slot 2</div>
			<div data-slot="3">Slot 3</div>
			<div data-slot="4">Slot 4</div>
			<div data-slot="5">Slot 5</div>
			<div data-slot="6">Slot 6</div>
			<div data-slot="7">Slot 7</div>
			<div data-slot="8">Slot 8</div>
			<div data-slot="9">Slot 9</div>
			<div data-slot="10">Slot 10</div>
		</div>
		<div id="voiceMeterTemplate" class="video-meter hidden">
		</div>
		<div id="voiceMeterTemplate2" class="video-meter2 hidden">
		</div>
		<div id="muteStateTemplate" class="hidden video-mute-state">
			<i class="las la-microphone-slash"></i>
		</div>
		<div id="videoMuteStateTemplate" class="hidden video-mute-state">
			<i class="las la-video-slash"></i>
		</div>
		<div id="raisedHandTemplate" class="hidden video-mute-state raisedHand">
			<i class="las la-hand-paper"></i>
		</div>
		<div id="selectImageTFLITE_contents" style="display:flex;overflow-x:auto;" class="hidden">
			<label style="min-width:100px;display:inline-block;margin:0px 1px; text-align:center; cursor:pointer;">
				<i class="las la-hdd" style="font-size: 3em;"></i><br /><span data-translate="select-local-image">Select Local Image</span>
				<input type="file"  accept="image/*" onchange="changeTFLiteImage(event, this)" style="position: fixed; top: -100em; margin-left:10px; border:1px solid #555;"> 
			</label>
		</div>
		<div id="selectImageOverlay_contents" style="display:flex;overflow-x:auto;" class="hidden">
			<label style="min-width:100px;display:inline-block;margin:0px 1px; text-align:center; cursor:pointer;">
				<i class="las la-hdd" style="font-size: 3em;"></i><br /><span data-translate="select-local-image">Select Local Image</span>
				<input type="file"  accept="image/*" onchange="changeOverlayImage(event, this)" style="position: fixed; top: -100em; margin-left:10px; border:1px solid #555;"> 
			</label>
			<label style="min-width:100px;display:inline-block;margin:0px 1px; text-align:center; cursor:pointer;" onclick="if (session.foregroundImg){session.foregroundImg.classList.remove('selectedTFImage');session.foregroundImg=null;}">
				<i class="las la-minus-circle" style="font-size: 3em;"></i><br /><span data-translate="clear-local-image">Clear Image</span>
			</label>
		</div>
		<div id="gridlayout"></div>
		<audio id="testtone" style="display:none;" preload="none">
			<source src="./media/tone.mp3" type="audio/mpeg"> 
			<source src="./media/tone.ogg" type="audio/ogg"> 
		</audio>
		<div class="gone" >
			<!-- This image is used when dragging elements -->
			<img src="./media/favicon-32x32.png" id="dragImage" loading="lazy" />
		</div>
		<div id="request_info_prompt" style="display:none">
		</div>
		<div id="screenPopup" class="popup-screen">
			<button onclick="getById('screenPopup').style.display='none';margin:0;padding:0;">Close Window</button>
			<div>See the 
				<a style="text-decoration: none; color: blue;" target="_blank" href="https://docs.vdo.ninja/advanced-settings">documentation</a> for more options and info.
			</div>
		</div>
		<div id="messagePopup" class="popup-message"></div>
		<div id="languages" style="right: 20px; bottom: 30px; display:none;" class="popup-message">
			<b data-translate='available-languages'>Available Languages:</b>
			<br />
			<ul id="languagesList" style="list-style-type: none; margin: 0;">
				<li><a onclick="changeLg('en');toggle(document.getElementById('languages'));" style="cursor: pointer;">English</a></li>
				<li><a onclick="changeLg('de');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Berlin">German</a></li>
				<li><a onclick="changeLg('fr');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Paris">French</a></li>
				<li><a onclick="changeLg('it');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Rome">Italian</a></li>
				<li><a onclick="changeLg('es');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Madrid">Spanish</a></li>
				<li><a onclick="changeLg('pt');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Lisbon;">Portuguese (Europe)</a></li>
				<li><a onclick="changeLg('pt-br');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="America/Araguaina">Portuguese (Brazil)</a></li>
				<li><a onclick="changeLg('nl');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Amsterdam">Dutch</a></li>
				<li><a onclick="changeLg('tr');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Istanbul">Turkish</a></li>
				<li><a onclick="changeLg('ja');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Asia/Tokyo">Japanese</a></li>
				<li><a onclick="changeLg('cn');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Asia/China">Chinese (中文)</a></li>
				<li><a onclick="changeLg('cs');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Prague">Czech</a></li>
				<li><a onclick="changeLg('ru');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Moscow">Russian</a></li>
				<li><a onclick="changeLg('uk');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Ukraine">Ukrainian</a></li>
				<li><a onclick="changeLg('eu');toggle(document.getElementById('languages'));" style="cursor: pointer;" data-tz="Europe/Euskara">Basque</a></li>
				<li><a onclick="changeLg('pig');toggle(document.getElementById('languages'));" style="cursor: pointer;">Pig Latin</a></li>
			</ul>
			<br style="line-height: 0.3;" />
			<i class="las la-exclamation-circle"></i><a href="https://github.com/steveseguin/vdoninja/tree/master/translations" target="_blank" rel="noopener noreferrer" data-translate='add-more-here'>Add More Here!</a>
			<br />
		</div>
		<div id="calendar" style="right: 20px; bottom: 30px;display:none;" class="popup-message" >
			<b  data-translate='add-to-calendar'>Add details to your Calendar:</b>
			<br />
			<u>
				<br />
				<a onclick="addToGoogleCalendar();" style="cursor: pointer;" data-translate='add-to-google-calendar'>Add to Google Calendar</a>
				<a onclick="addToOutlookCalendar();" style="cursor: pointer;" data-translate='add-to-outlook-calendar'>Add to Outlook Calendar</a>
				<a onclick="addToYahooCalendar();" style="cursor: pointer;" data-translate='add-to-yahoo-calendar'>Add to Yahoo Calendar</a>
				<br />
			</u>
		</div>
		<span class="hidden" id="hangupTemplate">
			<span id="hangupContainer">👋<br><button onClick='parent.location.reload();' title="Reload the page" data-translate="reload-page">Refresh</button></span>
		</span>
		<div id="meshcastMenu" class="hidden">
			Meshcast publishing region: <select name="edgelist" id="edgelist" onchange="selectMeshcast(this);" title="Select a location that is closest to both you and your audience."></select>
		</div>
		<script>
		
			if (window.location.hostname.indexOf("www.obs.ninja") == 0) {
				window.location = window.location.href.replace("www.obs.ninja","obs.ninja"); // the session.salt is domain specific; let's consolidate www as a result.
			} else if (window.location.hostname.indexOf("www.vdo.ninja") == 0) {
				window.location = window.location.href.replace("www.vdo.ninja","vdo.ninja"); // the session.salt is domain specific; let's consolidate www as a result.
			} else if (("isSecureContext" in window) && (window.isSecureContext===false)){
				console.error(" * Warning *\n\n - This site should be run in a secure context (https).\n - Please ensure all links, iframes, and parent windows are using SSL.\n - The webcam and other media devices may not be accessible while insecure.\n - WHEP playback and some other features might still function.");
			}
			
			console.log("->> Note: Do not paste code into this console unless from a trusted source <<--")

			
			////   Are you wanting general site password protection for your self-deployment?
			////   * You can also use HTTP Basic Authorization within your Web Server for more security
			////   * You can also check out Cloudflare's Zero Trust gateway for Oauth/SSO protection
			////   * Or if you want to add low-effort password to the site, you can uncomment the following code:
			// var pass = prompt("Enter your password");
			// if (pass!=="mypassword"){
			//   document.body.innerHTML = "";
			// }
			//// End of low-effort password code
			
			//// Another option simple option is to check for a URL parameter, and if none present, blank the page. You'll need to use URL parameters then to access the page.
			// if (!window.location.search){document.body.innerHTML = "";} // uncomment this line, if you wish to try it.
			
			var session = WebRTC.Media; // session is a required global variable if configuring manually. Run before loading main.js but after webrtc.js.
			session.version = "26.0";
			session.streamID = session.generateStreamID(); // randomly generates a streamID for this session. You can set your own programmatically if needed
			
			session.defaultPassword = "someEncryptionKey123"; // Change this password if self-deploying for added security/privacy
			// session.salt = location.hostname; // used only if password is not == False. You can change to "session.salt = location.hostname+location.pathname;" for greater deployment isolation
			
			session.stunServers = [{ urls: ["stun:stun.l.google.com:19302", "stun:stun.cloudflare.com:3478"]}]; // google + cloudflare stun servers. default
			
			if (window.location.hostname === 'vdo.socialstream.ninja') {
				session.wss = "wss://wss.socialstream.ninja:443"
			} else if (window.location.hostname === 'test.socialstream.ninja') {
				session.wss = "wss://wss.socialstream.ninja:443"
			}
			
			///////////////  ------  Custom basic TURN SETUP SECTION STARTS Here --------
			// session.configuration = {         // uncomment to disable the default usage of the vdo.ninja turn servers.
			//	iceServers: session.stunServers,
			//	sdpSemantics: session.sdpSemantics
			// };
			// var turn = {}; // Just an example entry for a basic TURN server 
			// turn.username = "steve";
			// turn.credential = "justtesting";
			// turn.urls = ["turn:turn.obs.ninja:443"]; 
			// session.configuration.iceServers.push(turn);
			//
			// turn = {}; // second turn server example entry. 
			// turn.username = "steve";
			// turn.credential = "justtesting";
			// turn.urls = ["turn:turn2.obs.ninja:443"]; 
			// session.configuration.iceServers.push(turn);
			/////////////// ------------ END OF TURN SETUP SECTION -------

			/////////////// --------  Alternative custom TURN SETUP SECTION here ---------
			// Use this section if you plan to use the turn-credentials.php sample and its use-auth-secret and static-auth-secret method, rather than a plain password
			// 
			// try {
				// session.ws = false; // prevents connection
				// var phpcredentialsRequest = new XMLHttpRequest();
				// phpcredentialsRequest.onload = function() {
					// if (this.status === 200) {
						// try {
							// var res = JSON.parse(this.responseText);
						// } catch(e){
							// console.error(e); // not proper JSON
							// return;
						// }
						// session.configuration = {};
						// session.configuration.sdpSemantics = session.sdpSemantics;
						// session.configuration.iceServers = [];
						//  // session.configuration.iceServers = session.stunServers; // Uncomment to use the hard-coded Google STUN servers, if we don't provide our own STUN

						// let phpIceServers = {"username": res[0], "credential": res[1], urls:[]};
						// for (let i = 2; i < res.length; i++){ // Supports one or multiple TURN/STUN servers, but assumes same credientials for each.
							// phpIceServers['urls'].push(res[i]);
						// };
						// session.configuration.iceServers.push(phpIceServers);

						// if (session.ws===false){
							// session.ws=null; // allows connection (clears block state)
							// session.connect(); // connect if not already connected.
						// }
					// }
					//  // system does not connect if php script does not respond.
				// };
				// phpcredentialsRequest.open('GET', './turn-credentials.php', true); // `false` makes the request synchronous
				// phpcredentialsRequest.send();
			// } catch (e) {
				// console.error(e);
				// errorlog("php-credentials script Failed");
			// }
			//////////////////// -------------- END OF ALTERNATIVE TURN SETUP SECTION -------

			// session.configuration.iceTransportPolicy = "relay";  // uncomment to enable "&privacy" and force the TURN server's use

			// session.wss = "wss://wss.vdo.ninja:443"; // US-East (Default)

			//  If wanting to fully-self-host, uncomment the following and deploy your own websocket server; good for air-gapped deployments
			// session.wss = "wss://wss.yourdomainhere.com:443"; // https://github.com/steveseguin/websocket_server 
			// session.customWSS = true;
			//////
			
			///// The following lets you set the defaults

			// session.webcamonly // true,false
			// session.stereo // 0,1,2,3,4,5
			// session.audiobitrate // int in kbps
			// session.view // "xxxx" ; the stream ID or a list of Stream IDs to Connect to. Not the same as &noaudio/&novideo. Set to "" (empty) if you don't wish to connect to any.
			// session.remote // See docs, but allows for remote stats monitoring and remote focus/zoom control
			// session.optimize  // Whether to optimize invisible scenes in OBS. See docs.vdo.ninja. Setting to 0 will pause the video/audio when not visible in OBS
			// session.disableOBS // If true, will disable any OBS-specific events/functions.
			// session.noaudio // False by default, otherwise specify a list [] of stream IDs to allow. Listing none allows no incoming audio streams
			// session.novideo // False by default, otherwise specify a list [] of stream IDs to allow. Listing none allows no incoming video streams
			// session.forceios // If true, will allow iOS devices to send H264 video to other guests in a room
			// session.nocursor // hides the cursor using CSS
			// session.codec // default codec; maybe h264 is useful? the default is up to the browser normally
			// session.scale // By default, scale is self-optimizing, but you can set a value of 1 to 100 to choose the playback scale of all incoming video streams
			// session.bitrate  // int in kbps -- you can set the default max target bitrate here
			// session.totalRoomBitrate = 500; // int, kbps -- you can set the default quality of the group room here
			// session.height // int  ; height to publish a video stream at.  Will fail if not supported by the camera
			// session.width // int ; see above
			// session.quality // int  -- if setting == 0, then than the default resolution will be 1080p, instead of 720p60 (q=1) , while  q=2 = 360p30.
			// session.sink // Output device to playback audio to. see the docs
			// session.offsetChannel // int
			// session.audioChannels // int
			// session.security // true to disable the wss connection after the first peer connection is made
			// session.frameRate // int ; publishing frame rate. will fail if camera does not support it.
			// session.sync // see the docs
			// session.buffer // int in milliseconds ; see the docs
			// session.roomid // "yyyy"  -- the room name to use.  alphanumeric.
			// session.password = null; // null will ask the user for a password
			// session.scene // the scene name. Scene 0, 1, ... 8, or any custom scene name is supported.  STRING value. Needed to have a clean view link of a guest stream
			// session.title // "zzzz"   ; sets the title of the browser page.
			// session.introOnClean = true; // this will load the page with the webcam selection screen if &push or &room is in the URL; no need to use &webcam.
			// session.lowBitrateCutoff = 300; // Set a minimum bitrate (in kbps) before the stream is hidden. Useful for IRL streams maybe
			// session.apiserver = "wss://api.vdo.ninja:443"; // specifiy a custom websocket API URL.
			// session.darkmode = false; // enable or disable the dark style theme as the default
			// session.defaultBackgroundImages = ["./media/bg_sample1.webp", "./media/bg_sample2.webp"]; // for &effects=5 (virtual backgrounds)
			// session.hidehome = true; // If used, 'hide home' will make the landing page inaccessible, along with hiding a few go-home elements.
			// session.language="auto"; // "blank" is another option, or a specific language, like "de" or "pt-br"
			// session.record = false; // uncomment to block users from being able to record via vdo.ninja's built in recording function
			// session.whipServerURL = "wss://whip.vdo.ninja"; // If you deploy your own whip websocket service
			// session.mediamtx = "youdomain.com:443"; // Your hosted MediaMTX SFU domain. Assumes HTTPS-enabled.
			// session.GDRIVE_CLIENT_ID = "877199999934-67tq62xxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com"; // get your own id/key from Google Cloud
			// session.GDRIVE_API_KEY = 'AINNNNNNNNNNNNNNN-39s99999999999999999'; // lets you upload to google drive if self hosting.
			
			// session.decrypted = session.decodeInvite("U2FsdGVkX1+d58DFIHoO3EQZSuX86ch4PqW2ouztnJ0="); // get a code from invite.cam
			
		</script>
		<script type="text/javascript" crossorigin="anonymous" id="lib-js" src="./lib.js?ver=1217"></script>
		<script type="text/javascript" crossorigin="anonymous" id="main-js" src="./main.js?ver=899"></script>
		<script>// custom js
			if (urlParams.has("streamid") || urlParams.has("view") || urlParams.has("v") || urlParams.has("pull")) {
				// the streams we want to view; if set, but let blank, we will request no streams to watch.
				session.view = urlParams.get("streamid") || urlParams.get("view") || urlParams.get("v") || urlParams.get("pull") || null; // this value can be comma seperated for multiple streams to pull
				console.log(session.view);
				const element = document.querySelector('.papa');  // Select the first element with the class
				if (element) {
					element.remove();  // Remove the element from the DOM
				}
	
			}else{
				console.log("didn't work");
	
			}
			//Youtube chat poopout function
			function openYTChatInNewWindow() {
				window.open('https://www.youtube.com/live_chat?is_popout=1&v=0lssN8EtmQ4', 'newWindow', 'width=800,height=600');
			}

	</script>
	
	</body>
</html>