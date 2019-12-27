This is for my Mother's Christmas/Birthday gift

Grinch with a Heart
Technology used:
    -Php
    -Javascript
    -HTML5/CSS3
    -Bash
    -Python
    -Buttons
    -Raspberry Pi Zero
    -LED and Resistors

Software downloaded:
    -Appache2
    -Python3
    -xterm 
    
Generalization: A nutcracker that looks like the grinch has a LED heart. The heart can be remotely controlled LAN on a webapp. 
There are two options the user can select: OFF/ON, Heart Beat Pulse. I wanted to have the heart beat pulse as default, but I was having
trouble with the on/off working with it. Basically, there were multiple php files running at the same time, while loop in heartbeat php file.

There is an exeternal option with the nutcracker. On the base of it there are two options, Reset/Pull from gitlab or shutdown the Raspberry Pi.
Both use python, shutdown mode signals to the bash code for extra coolness. The python code runs on bootup and continuely checks to see if pressed, 
could probably change this to interrupt instead of polling.
