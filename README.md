#GitHub WebHooks

##Introduction
Various WebHooks to use on a remote server.

##Installation

1) Clone the repo: `git clone https://github.com/arielcr/web-hooks.git`
2) Upload the web-hooks folder to your site root

##Usage

#### Update Server WebHook
WebHook that updates the files on a remote server every time your make a push to GitHub

1) Go to `[Your Repo]->[Settings]->[Service Hooks]->[WebHook URLs]`
2) Place the URL to `http://yoursite.com/web-hooks/update-server.php`
3) Commit/Push your site
4) Your site will be under `http://yoursite.com/your-repo-name`

More WebHooks to be added soon ...
