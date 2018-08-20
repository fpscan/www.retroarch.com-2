 <?php $version = "1.7.3"; ?>

<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Frequenty Asked Questions</h1>
                <p></p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
     <h1>General questions</h1>
        <h3>Which core is the best to emulate (some console / game) ?</h3>
        <div class="row platforms">
        There is no best core, each has a different use case (accuracy, speed...).
        </div>
     <h3>I can't load / the core crashes on startup with (some game)</h3>
     <div class="row platforms">
      It's either because :
<ul>
 <li>You are missing a required file like the BIOS or the name is not exact
  (you can check it under main menu -> load core -> information -> core information)</li>
 <li>The core doesn't support your game</li>
 <li>Your ROM is a bad dump</li>
 <li>The core doesn't support the video driver you are using</li>
 <li>If you are using a disc-based game (bin + cue archive) you need to unzip it</li>
      </ul>
     </div>
     <h3>Why does some core / game run slowly ?</h3>
     <div class="row platforms">It is likely because your system is too slow.</div>
     
     <h1>Windows platform-specific</h1>
     <h3>When I try to load a core on RetroArch it says "No Core"</h3>
     <div class="row platforms">
      It's either because :
      <ul>
       <li>You need to download the MSVC Runtime</li>
       <li>You need to update RetroArch</li>
      </ul>
     </div>
     
     <h3>I can't see (some core) in the download list</h3>
<div class="row platforms">
 Maybe you have accidentally downloaded the Windows XP build, which is not compatible with all cores.
    </div>
     <h1>Project-specific</h1>
     <h3>When will the next version of RetroArch be released ?</h3>
     <div class="row platforms">
      There is no ETA. You can <a href="https://buildbot.libretro.com/nightly/">try the nightly builds to get the latest features</a>.
     </div>
</div>
</div>