
SimpleNavigation::Configuration.run do |navigation|
  navigation.items do |primary|
    $ROUTES.each do |name,title|
      primary.item name, title, "/#{name.to_s}"
    end
  end
end