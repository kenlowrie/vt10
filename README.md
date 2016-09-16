# Video Trainer

### A Video Training Website built on PHP

Welcome to the Video Trainer project. This document should help you get the project up and running on your own server. If you have questions, or would like to provide feedback and/or to report a bug, feel free to contact the author, Ken Lowrie, at [www.kenlowrie.com](http://www.kenlowrie.com/).

### Attributions

Add any attributions here.

#### Installing this app to your server

This is a [Gulp](http://gulpjs.com/) project, so you'll need [Node.js](https://nodejs.org/en/) installed on your build machine in order to put the distribution together. Follow the link above to learn about Gulp and how to set it up on your system, just make sure to install and configure Node.js first.

Once you've installed Node.js, simply checkout the source tree from Github to a local directory on your system, and issue: "npm install" to automatically pull down the various Gulp modules you need to build a distribution.

Then, run "gulp" to build a development version, or "NODE_ENV=rel gulp" to build a release version (the only difference is that your CSS and JS will be minified in the release version.

Running Gulp will create a "Build/dev" or "Build/rel" depending on how the NODE_ENV variable is set. Go into the corresponding directory, and then transfer all the files up to your server, maintaining the directory structure, and you'll be all set.

That's it! If you run into any problems, feel free to contact me for assistance.

#### Why the Video Trainer Project?

I needed a way to organize and present a series of training videos in a format that made it easy for a user to watch them in order...

Originally, I used a MySQL database to store the videos, but in this cleaned up version, I have simply used a static table of videos. Maybe someday I'll put the DB code back in, but for now, I like this simple version, which can be quickly adapted to a new series and bought online.

#### Getting Started with the App

I don't think this app requires much documentation. But again, I will write up some additional basic information after I finish fixing a few more bugs and testing it out on different devices and browsers.

#### Summary

This concludes the documentation on the Video Trainer app.
