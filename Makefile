CONTAINER_NAME=hotel-booking-laravel.test-1

sail-bash:
	make sail-up
	docker exec -it $(CONTAINER_NAME) sh

sail-up:
	sail up

sail-down:
	sail down
