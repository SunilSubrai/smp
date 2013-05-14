# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "raring32.box"
  config.vm.box_url = "http://omobono-dev/raring32.box"
  config.vm.network :forwarded_port, guest: 80, host: 8888
  
	config.vm.provision :chef_solo do |chef|
		chef.cookbooks_path = "cookbooks"
		chef.add_recipe "apache2"
		chef.add_recipe "mysql::server"
		chef.add_recipe "php"
		chef.json = {
			"mysql" => {
				"server_root_password" => "hello",
				"server_repl_password" => "hello",
				"server_debian_password" => "hello"
				}
		}				
	end

end
