#GitHub WebHooks

##Introduction
WebHooks to use on a remote server.

##Installation

1. Clone the repo: `git clone https://github.com/arielcr/web-hooks.git`
2. Upload the __web-hooks__ folder to your site root

##Usage

##### Update Server WebHook
This WebHook updates the files on a remote server every time your make a push to GitHub

1. Go to __[Your Repo]->[Settings]->[Service Hooks]->[WebHook URLs]__
2. Place the URL to `http://yoursite.com/web-hooks/update-server.php`
3. Commit/Push your site
4. Your site will be under `http://yoursite.com/your-repo-name`

For every repo there is a log file located in the __logs__ folder indicating all the commits made for every repo. Be sure that this folder is writable by the web server.


_More WebHooks to be added soon ..._
