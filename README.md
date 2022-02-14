# Creating Centos Server with Apache Mysql and PHP using Ansible and Foreman
- Requirements:
The system should be bootstrapped with the network configuration :
- ip address 1.0.0.1
- user ansible
- sudo configuration (user added to wheel group)
- ssh-key public key installed
User needs to be created with a possibility of privilige escalation using sudo
A new ssh key should be added to the created user in order for the ansible playbook to make changes on the host. 

# Running the playbook
Run the playbook using the following command: also please provide the sudo password for the ansible user as an extra var 
$ ansible-playbook  playbooks/install_amp_stack.yml --extra-vars "ansible_sudo_pass=<YourPassword>"