# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "raring32.box"
  config.vm.box_url = "http://www.omobonomarketing.com/raring32.box"
  config.vm.network :forwarded_port, guest: 80, host: 8888
  
	config.vm.provision :chef_solo do |chef|
		chef.cookbooks_path = "cookbooks"
		chef.add_recipe "openssl"
		chef.add_recipe "apache2"
		chef.add_recipe "mysql"
		chef.add_recipe "mysql::server"
		chef.add_recipe "php"
		chef.add_recipe "php::module_apc"
		chef.add_recipe "php::module_curl"
		chef.add_recipe "php::module_mysql"
		chef.add_recipe "apache2::mod_php5"
		chef.add_recipe "apache2::mod_rewrite"
		chef.json = {
			"mysql" => {
				"server_root_password" => "hello",
				"server_repl_password" => "hello",
				"server_debian_password" => "hello"
				}
		}				
	end

end
