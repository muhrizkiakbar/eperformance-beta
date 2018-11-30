FROM starefossen/ruby-node:2-8-stretch
RUN apt-get update -qq && \
    apt-get install -y nano build-essential libpq-dev && \
    gem install bundler
RUN mkdir /eperformance-beta
COPY Gemfile Gemfile.lock /eperformance-beta/
WORKDIR /eperformance-beta
RUN bundle install
COPY . /eperformance-beta