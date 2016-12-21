<?php

$ox = " Inexcusable / ";
$ax = " Novelty Implementations / ";
$bx = " Edge Cases / ";
$cx = " Fucking / ";
$dx = " Meme Driven / ";
$ex = " Syntax Error / ";
$fx = " Substane-Affected Developer / ";
$gx = " Predictable Problems / ";
$hx = " Somebody Else's Problem / ";
$ix = " Internet Crashed / ";

$headers = array(
  "01".$ox."Meh","02".$ox."Emacs","03".$ox."Explosion","04".$ox."Goto Fail","05".$ox."I wrote the code and missed the necessary validation by an oversight (see 795)","06".$ox."Delete Your Account","07".$ox."Can't quit vi",
  "10".$ax."PHP","11".$ax."Convenience Store","12".$ax."NoSQL","18".$ax."I am not a teapot","19".$ax."Haskell",
  "20".$bx."Unpossible","21".$bx."Known Unknowns","22".$bx."Unknown Unknowns","23".$bx."Tricky","24".$bx."This line should be unreachable","25".$bx."It works on my machine","26".$bx."It's a feature, not a bug","27".$bx."32 bits is plenty","28".$bx."Go Fish",
  "30".$cx."Fucking Bower","31".$cx."Fucking Rubygems","32".$cx."Fucking Unic💩de","33".$cx."Fucking Deadlocks","34".$cx."Fucking Deferreds","35".$cx."Fucking IE","36".$cx."Fucking Race Conditions","37".$cx."FuckThreading","38".$cx."Fucking Bundler","39".$cx."Fucking Windows",
  "40".$dx."Computer says no","41".$dx."Compiling","42".$dx."A kitten dies","43".$dx."I thought I knew regular expressions","44".$dx."Y U NO write integration tests?","45".$dx."I don't always test my code, but when I do I do it in production","46".$dx."Missed Ballmer Peak","47".$dx."Motherfucking Snakes on the Motherfucking Plane","48".$dx."Confounded by Ponies","49".$dx."Reserved for Chuck Norris",
  "50".$ex."Didn't bother to compile it","53".$ex."Syntax Error","54".$ex."Too many semi-colons","55".$ex."Not enough semi-colons","56".$ex."Insufficiently polite","57".$ex."Excessively polite","59".$ex."Unexpected T_PAAMAYIM_NEKUDOTAYIM",
  "61".$fx."Hungover","62".$fx."Stoned","63".$fx."Under-Caffeinated","64".$fx."Over-Caffeinated","65".$fx."Railscamp","66".$fx."Sober","67".$fx."Drunk","68".$fx."Accidentally Took Sleeping Pills During Crunch Week","69".$fx."Questionable Maturity Level",
  "71".$gx."Cached for too long","72".$gx."Not cached long enough","73".$gx."Not cached at all","74".$gx."Why was this cached?","75".$gx."Out of cash","76".$gx."Error on the Exception","77".$gx."Coincidence","78".$gx."Off By One Error","79".$gx."Off By Too Many To Count Error",
  "80".$hx."Project owner not responding","81".$hx."Operations","82".$hx."QA","83".$hx."It was a customer request, honestly","84".$hx."Management, obviously", "85".$hx."TPS Cover Sheet not attached","86".$hx."Try it now","87".$hx."Further Funding Required","88".$hx."Designer's final designs weren't","89".$hx."Not my department",
  "91".$ix."The Internet shut down due to copyright restrictions","92".$ix."Climate change driven catastrophic weather event","93".$ix."Zombie Apocalypse","94".$ix."Someone let PG near a REPL","95".$ix."#heartbleed (see 705)","97".$ix."This is the last page of the Internet. Go back","99".$ix."End of the world"
);

$randomheader = $headers[array_rand($headers)];

header('HTTP/1.1 7'.$randomheader, true);

?>
