FROM --platform=$BUILDPLATFORM php:7.4-apache as builder

CMD ["apache2-foreground"]

FROM builder as dev-envs

RUN
apt-get update
apt-get install -y --no-install-recommends git
EOF

RUN
useradd -s /bin/bash -m vscode
groupadd docker
usermod -aG docker vscode

# install Docker tools (cli, buildx, compose)
COPY --from=gloursdocker/docker / /

CMD ["apache2-foreground"]
