# Features for Basic Verison #
Common Sign Up / Login
Client - Freelancer 
Client - Post Job , View Proposals , Accept / Decline Proposal , Chat Freelancer (Simple Chat with Attachment support)
Post Job - Job name  , Description, Required skills (Can be Multiple), Time , Budget . 
Freelancer - Bid on the Job 
FReelancers will have limited number of bids based on the Package they choose 
Packages - Free(20 bids per month , 20 percent commission) , Starter(30 bids per month , 15 percent commission) , Expert (40 bide permonth , 10 percent commission)
Admin can create / update Packages 

## After Basic Version is Complete we will start with REST API for Mobile Application

# App Structure #
  Our Aim is to develop a system which is extensible .
  We will earn from Extensions / Modules
  We Also need to make it themeable , So we can develop themes for the system and sell them seprately 

## Rest Api For Mobile Applications 
  For Mobile Application , IN user table we will need Additional Columns 
  Device Type (Android,ios) <br>
  And device Token (Needed for push notifications) <br>
  (Whenever a Notification Email is sent , A push notification will also be sent)<br>
  For push notifications we can use (https://onesignal.com/) - There are laravel Packages available for this .<br>
  Based on Device token and device type notifications will be sent .<br>
