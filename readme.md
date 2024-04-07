# NibblePoker's CI/CD Stack (W.I.P.)
A simple CI/CD platform that can be used to...

View a live demo on "[cicd.nibblepoker.lu](https://cicd.nibblepoker.lu)".

## Warning
The code in this repository is an as-is copy of the code being ran in production and makes references to
resources hosted on other subdomains of mine which may restrict access to said resources.

**Relevant resources:**
* Main stylesheet *([nibblepoker.min.css](https://nibblepoker.lu/resources/NibblePoker/css/nibblepoker.min.css))*
* All images used in styles
* Quantum Font *([See license below](#external-resources))*
* Font Awesome Pro *(Will not be accessible on non-permitted domains !)*

On top of that, the [docker-compose.yml](docker-compose.yml) file defines labels, environment variables and networks
that are only relevant to my infrastructure and are used by other dockerized stacks which aren't included here.

**Relevant fields:**
* Traefik's network & YAML-based rules
* [Watchtower](https://github.com/containrrr/watchtower)

## Licenses
The code in this repository is licensed under [CC0 1.0 Universal (CC0 1.0) (Public Domain)](LICENSE-CC0).

### External resources
Here is a list of the licenses for any third-party things used by parts of this repository.

* [Quantum Font](https://sesohq.sellfy.store/p/3enu/) by [sesohq](https://www.sesohq.com/)
  * Free font with no apparent usage restrictions.
  * Required by main stylesheet.

### Images & Sounds
The images and sounds present in this repository aren't currently licensed.
