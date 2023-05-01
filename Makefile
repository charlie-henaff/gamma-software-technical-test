# Executables (local)
DOCKER_COMP = docker compose

# Misc
.DEFAULT_GOAL = help

##
help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9\./_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
##

## —— Project 🚀 ——————————————————————————————————
start: ## Start project 
	@cd backend && make --no-print-directory start && cd ../
	@cd frontend && make --no-print-directory start && cd ../

stop: ## Stop project 
	@cd backend && make --no-print-directory stop && cd ../
	@cd frontend && make --no-print-directory stop 

restart: ## Restart project 
	@make --no-print-directory stop  
	@make --no-print-directory start

.PHONY: start stop restart

##