#!/bin/sh

# This is needed to find gems installed with --user-install
export HOME=/home/stoerkle

. $HOME/.bash_profile

# This makes Rails/Rack think we're running under FastCGI.
# See ~/.gems/ruby/1.9.1/gems/rack-1.2.1/lib/rack/handler.rb
export PHP_FCGI_CHILDREN=1

# Get into the project directory and start the sinatra app
cd $HOME/html
exec bundle exec rackup
