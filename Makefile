default: build_wp

IMAGE_VERSION=0.0.0
IMAGE_NAME=intranet_wp
IMAGE_TAG_NAME=unosquare/$(IMAGE_NAME):$(IMAGE_VERSION)
build_wp:
	docker build --rm -f docker/wordpress.Dockerfile -t $(IMAGE_TAG_NAME) .
	docker tag $(IMAGE_TAG_NAME) unosquare/$(IMAGE_NAME):latest


IMAGE_VERSION=0.0.0
IMAGE_NAME=intranet_db
IMAGE_TAG_NAME=unosquare/$(IMAGE_NAME):$(IMAGE_VERSION)
build_mariadb:
	docker build --rm -f docker/mariadb.Dockerfile -t $(IMAGE_TAG_NAME) .
	docker tag $(IMAGE_TAG_NAME) unosquare/$(IMAGE_NAME):latest