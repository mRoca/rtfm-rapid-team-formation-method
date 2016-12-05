# Rapid Team Formation Method - Docker

(The main part of the documentation comes from https://www.docker.com/)

![Docker logo](img-docker/moby.svg)

---

## What is Docker ?

> Docker containers wrap a piece of software in a complete filesystem that contains everything needed to run:
    code, runtime, system tools, system libraries – anything that can be installed on a server.
    This guarantees that the software will always run the same, regardless of its environment.

![Containers](img-docker/docker-what-containers.png)

---

### Lightweight

> Containers running on a single machine share the same operating system kernel;
    they start instantly and use less RAM. Images are constructed from layered filesystems and share common files,
    making disk usage and image downloads much more efficient.

---

### Open

> Docker containers are based on open standards, enabling containers to run on all major Linux distributions
    and on Microsoft Windows -- and on top of any infrastructure.

---

### Secure by default

> Containers isolate applications from one another and the underlying infrastructure,
  while providing an added layer of protection for the application.

---

### Containers VS VM

---

#### Virtual machines

> Virtual machines include the application, the necessary binaries and libraries,
    and an entire guest operating system -- all of which can amount to tens of GBs.

![Vms](img-docker/docker-what-vm-compare.png)

---

#### Containers

> Containers include the application and all of its dependencies --but share the kernel with other containers,
    running as isolated processes in user space on the host operating system.
    Docker containers are not tied to any specific infrastructure: they run on any computer,
    on any infrastructure, and in any cloud.


![Containers](img-docker/docker-what-containers-compare.png)

---

### Using images

> An image is a filesystem and parameters to use at runtime. It doesn’t have state and never changes.

To get an image, two choices :

- Pull it from the global https://hub.docker.com/ registry :

`docker pull myimage`

- Create and build it on your host with a `Dockerfile` file :

`docker build -f ./myDockerfile -t myImageName`

---

### Using containers

> A container is a running instance of an image.

To run a new container from an image :

```bash
docker run --myOptions myImage myCommand
```
Example :

```bash
docker run --rm node npm version
```

```bash
docker run --rm -ti -u node -w /usr/src/app node:7.2 bash
```

```bash
docker run --rm -ti -u node -w /usr/src/app -p 3001:3000 node:7.2 node server.js
```

---

## Images, containers, and storage drivers

---

### Image layers

> Each Docker image references a list of read-only layers that represent filesystem differences. 

![Image layers](img-docker/docker-image-layers.jpg)

> The Docker storage driver is responsible for stacking these layers and providing a single unified view.

---

### Container layer

> When you create a new container, you add a new, thin, writable layer on top of the underlying stack.
    This layer is often called the “container layer”.
    All changes made to the running container - such as writing new files,
    modifying existing files, and deleting files - are written to this thin writable container layer. 

![Container layers](img-docker/docker-container-layers.jpg)

> Docker 1.10 introduced a new content addressable storage model.
    Previously, image and layer data was referenced and stored using a randomly generated UUID.
    In the new model this is replaced by a secure content hash.

