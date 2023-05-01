# Tools 
CURRENT_UID 					= $(shell id -u)
CURRENT_GID 					= $(shell id -g)
CURRENT_PATH 					= $(shell pwd)

NODE_IMG 						= frontend-node
NODE_PORTS 						= 3000:3000

DOCKER_VOLUMES					= -v $(CURRENT_PATH):/usr/src
DOCKER_RUN						= docker run -it --rm -u $(CURRENT_UID):$(CURRENT_GID) 
DOCKER_RUN_NODE 				= $(DOCKER_RUN) -p $(NODE_PORTS) $(DOCKER_VOLUMES) $(NODE_IMG)

# Executables (local)
DOCKER_COMP = docker compose

# Docker containers
NODE_CONT 	= $(DOCKER_COMP) exec node

# Executables
NPM      	= $(NODE_CONT) npm
NG      	= $(NODE_CONT) ng

# Misc
.DEFAULT_GOAL = help
.PHONY: 		help

##
help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9\./_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
##

## —— Project 🚀 ———————————————————————————————————————————————————————————————
build.tmp: Dockerfile
	@$(DOCKER_COMP) build --pull --no-cache
	@touch build.tmp

start: build.tmp ## Start project 
	@$(DOCKER_COMP) up -d

stop: ## Stop project 
	@$(DOCKER_COMP) down --remove-orphans

restart: ## Restart project 
	@make --no-print-directory stop
	@make --no-print-directory start

logs: ## Show live logs
	@$(DOCKER_COMP) logs --tail=0 --follow

sh: ## Connect to the NODE container
	@$(NODE_CONT) sh

.PHONY: start stop restart logs sh

##
## —— Commands 🧙 ——————————————————————————————————————————————————————————————
ng-new-app: build.tmp
	@$(DOCKER_RUN_NODE) ng new app

npm: ## Run npm, pass the parameter "c=" to run a given command, example: make npm c='i express'
	@$(eval c ?=)
	@$(NPM) $(c)

ng: ## Run ng, pass the parameter "c=" to run a given command, example: make npm c='serve'
	@$(eval c ?=)
	@$(NG) $(c)

.PHONY: ng-new-app npn ng 
	
##