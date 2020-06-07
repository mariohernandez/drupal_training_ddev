
# Install and configure nvm
ARG BASE_IMAGE=drud/ddev-webserver:v1.12.2
FROM $BASE_IMAGE
RUN npm install --global gulp-cli

ENV NVM_DIR=/usr/local/nvm
ENV NODE_DEFAULT_VERSION=v12.17.0

RUN curl -sL https://raw.githubusercontent.com/nvm-sh/nvm/v0.34.0/install.sh -o install_nvm.sh
RUN mkdir -p $NVM_DIR && bash install_nvm.sh
RUN echo "source $NVM_DIR/nvm.sh" >>/etc/profile
RUN bash -ic "nvm install $NODE_DEFAULT_VERSION && nvm use $NODE_DEFAULT_VERSION"
RUN chmod -R ugo+w $NVM_DIR

## Build a new Drupal-based project using ddev
# RUN echo -e "Buildin your drupal website now"
# RUN ddev composer create drupal-composer/drupal-project:8.x-dev --stability dev --no-interaction && ddev config --project-type drupal8 && ddev exec drush site-install standard --site-name=drupal8 --account-name=admin --account-pass=admin --account-mail=mail@example.com --yes

## Install and enable some Basic Drupal Modules ready for work: devel, masquerade, admin_toolbar and webprofiler
# RUN echo -e "Now that Drupal is running, let's enable some modules"
# RUN ddev composer require drupal/devel drupal/paragraphs drupal/admin_toolbar drupal/twig_field_value drupal/components drupal/entity_reference_revisions drupal/viewsreference drupal/crop drupal/focal_point
# RUN ddev exec drush en devel admin_toolbar components kint twig_field_value paragraphs entity_reference_revisions viewsreference media media_library responsive_image admin_toolbar_tools focal_point crop
# RUN ddev exec drush updb
RUN ddev exec drush cr
