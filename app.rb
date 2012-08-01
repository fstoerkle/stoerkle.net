
require "sinatra"

ROUTES = %w{home u imprint projects}

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
  halt 404 unless ROUTES.include? route
  
  #send_file "#{route}.html"
  erb route.to_sym
end

not_found do
  erb :error_404
end
