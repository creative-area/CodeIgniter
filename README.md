Creative Area CodeIgniter
=========================

La procédure décrite ci-dessous permet de travailler sur notre version "customizée" de CodeIgniter.

A noter que nos projets sont basés sur la branche `master` de CodeIgniter.

Installation
------------

Pour intervenir sur le fork de Creative Area :

Cloner le fork CodeIgniter de Creative Area
	
	$ git clone git@github.com:creative-area/CodeIgniter.git

Pour pouvoir mettre à jour notre fork en cas de mise à jour du repo originel, il faut ajouter un nouveau remote que nous nomons `upstream`

	$ git remote add upstream git://github.com/EllisLab/CodeIgniter.git

Si le projet original est modifié et que l'on souhaite mettre à jour notre fork 

	$ git fetch upstream
	$ git merge upstream/master
	
La procédure est la même lorsque travaillez sur un projet basé sur le fork de CodeIgniter :

Pour pouvoir mettre à jour notre projet en cas de mise à jour de notre version de CodeIgniter, il faut ajouter un nouveau remote que nous nomons `upstream`

	$ git remote add upstream git://github.com/creative-area/CodeIgniter.git

Si notre version de CodeIgniter est modifiée et que l'on souhaite mettre à jour notre projet 

	$ git fetch upstream
	$ git merge upstream/master