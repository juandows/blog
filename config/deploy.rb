set :application, "Blog"
set :repository,  "https://github.com/juandows/blog.git"

# set :scm, :git # You can set :scm explicitly or Capistrano will make an intelligent guess based on known version control directory names
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

set :scp, :git
set :deploy_via,            :rsync_with_remote_cache
set :user,                  "juande"
set :use_sudo,              false
#set :ssh_options,           { :port => 1267 }
set :default_shell,         :bash

set :shared_files,          ["app/config/parameters.yml"]
set :shared_children,        ["web/uploads"]

set :writable_dirs,             ["app/cache", "app/logs"]
set :webserver_user,            "www-data"
set :permission_method,         :chmod
set :use_set_permissions,       true

set :stages,                %w(production development)
set :default_stage,         "development"
set :stage_dir,             "config/deploy"

set :deploy_folder,         "/var/www/blog-cap"

require 'capistrano/ext/multistage'

default_run_options[:pty] = true

after "deploy:restart", "deploy:cleanup"

#role :web, "your web-server here"                          # Your HTTP server, Apache/etc
#role :app, "your app-server here"                          # This may be the same as your `Web` server
#role :db,  "your primary db-server here", :primary => true # This is where Rails migrations will run
#role :db,  "your slave db-server here"

# if you want to clean up old releases on each deploy uncomment this:
# after "deploy:restart", "deploy:cleanup"

# if you're still using the script/reaper helper you will need
# these http://github.com/rails/irs_process_scripts

# If you are using Passenger mod_rails uncomment this:
# namespace :deploy do
#   task :start do ; end
#   task :stop do ; end
#   task :restart, :roles => :app, :except => { :no_release => true } do
#     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
#   end
# end
