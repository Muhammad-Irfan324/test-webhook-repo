<?php
define("TOKEN", "pnlsirosizrhdyyraqrdprwjbpsvtyevdixpsefuzwfcyzklfeplskkohrlafzjnmnsstleitnjjlwtzfotaaynxdojfgltscjszduepyujgursazrriyfjqiyqdslqu");                                       // The secret token to add as a GitHub or GitLab secret, or otherwise as https://www.example.com/?token=secret-token
define("git@github.com:Muhammad-Irfan324/test-webhook-repo.git"); // The SSH URL to your repository
define("DIR", "/home/irfantahir/work/test-webhook-repo/");                          // The path to your repostiroy; this must begin with a forward slash (/)
define("BRANCH", "refs/heads/master");                                 // The branch route
define("LOGFILE", "deploy.log");                                       // The name of the file you want to log to.
define("GIT", "/usr/bin/git");                                         // The path to the git executable
define("MAX_EXECUTION_TIME", 180);                                     // Override for PHP's max_execution_time (may need set in php.ini)
define("BEFORE_PULL", "/usr/bin/git --version");                                             // A command to execute before pulling
define("AFTER_PULL", "/usr/bin/git --version");                                              // A command to execute after successfully pulling

require_once("deployer.php");
