# PHP Cron Job on XAMPP

This project demonstrates how to set up a PHP script to run as a cron job on a local XAMPP environment.

## Installation

1. **Clone the Repository**

   ```sh
   git clone https://github.com/waleedahmedwaheed/cronjob-php.git

# PHP Cron Job on XAMPP

This project demonstrates how to set up a PHP script to run as a cron job on a local XAMPP environment. A cron job is a scheduled task that runs automatically at specified intervals.

## Installation

1. **Clone the Repository**

   Clone the repository to your local machine:

    
   
Navigate to the Project Directory

Change into the project directory:

sh
Copy code
cd cronjob-php
Check the Script

Ensure that src/cronjob.php is working by running it manually:

sh
Copy code
php src/cronjob.php
This should create a cronjob.log file in the src directory with a timestamp.

Setting Up Cron Job
On Windows with XAMPP
Open Task Scheduler

Search for "Task Scheduler" in the Windows Start menu and open it.
Create a Basic Task

Click on "Create Basic Task" from the right-hand side.
Name the task (e.g., "Run PHP Cron Job").
Set the trigger (e.g., daily, weekly, etc.). For testing, you might choose "Daily" and set a specific time.
Configure Task Action

Action: Choose "Start a Program".

Program/Script: Provide the path to the php.exe file in your XAMPP installation (e.g., C:\xampp\php\php.exe).

Add Arguments: Provide the path to your PHP script (e.g., C:\path\to\your\project\src\cronjob.php).

Example:

sh
Copy code
"C:\xampp\php\php.exe" "C:\path\to\your\project\src\cronjob.php"
Finish Setup

Complete the wizard and make sure the task is enabled.
You can manually test the task by selecting it in Task Scheduler and choosing "Run".
Verify Execution

After the task runs, check the cronjob.log file in the src directory to verify that the cron job executed successfully.
On Linux (For Reference)
If you were on a Linux environment, you would use crontab to schedule the job:

Open Crontab

sh
Copy code
crontab -e
Add Cron Job Entry

Add a line to run the script at your desired frequency. For example, to run the script every minute:

sh
Copy code
* * * * * /usr/bin/php /path/to/your/project/src/cronjob.php
Save and Exit

Save the file and exit the editor. The cron job will now run according to the schedule.

Verify Execution

Check the cronjob.log file in the src directory to ensure the cron job executed successfully.
Execution Steps
To manually execute the PHP script and verify that it works:

Open Command Prompt or Terminal

Open a command prompt (Windows) or terminal (Linux/Mac).

Navigate to Project Directory

Change to the project directory where cronjob.php is located:

sh
Copy code
cd /path/to/your/project/src
Run the Script

Execute the PHP script manually:

sh
Copy code
php cronjob.php
Check Log File

After running the script, check the cronjob.log file in the src directory to ensure that the script executed correctly and the log entry was created.