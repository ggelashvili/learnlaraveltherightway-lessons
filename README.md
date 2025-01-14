### Learn Laravel The Right Way (Lessons Source Code)
This repository contains the source code of the relevant lessons from the [Learn Laravel The Right Way](https://www.youtube.com/playlist?list=PLr3d3QYzkw2xTKNyWpm7XZ63j-HntTyvC) series from YouTube. 

### Branches
The **main** branch will always contain the latest episode's source code. Each lesson will have dedicated branches: **Episode_#_Start** & **Episode_#_End**. **#** in here indicates the lesson number. You will find lesson numbers in the thumbnail of the videos. The **Start** & **End** simply indicate the starting code at the beginning of the video & the ending code by the end of the video. Note that some videos may not contain the **Episode_#_End** if the code was not changed. If you want to follow along the video & code along with me then pick the branch appropriate for the lesson that you are watching & make sure it's the one with **_Start**. If you just want to see the solution or the final code for that lesson then you can use the branch appropriate for the lesson with **_End** (if applicable).

### Tips
* Make sure to run `composer install` & `npm install` after you pull the latest changes or switch to a new branch so that you are always using the same versions of dependencies that I do during the lessons
* Run `npm run dev` if you want to build assets for development
* Run `npm run build` if you want to build assets for productions
