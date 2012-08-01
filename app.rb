
require "sinatra"
require "sinatra/simple-navigation"

require "./routes"

SimpleNavigation.config_file_path = File.dirname(__FILE__)

helpers do
  def title(t=nil)
    unless t.nil?
      @title = t
    end

    @title
  end
end

get "/:name?" do |route|
  route ||= "home"
  halt 404 unless $ROUTES.keys.include? route.to_sym
  
  erb route.to_sym
end

not_found do
  erb :error_404
end
