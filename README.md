Web-Service
=========================









## Web-Services Made `Simple.`
[![Maven Central](https://maven-badges.herokuapp.com/maven-central/com.intuit.karate/karate-core/badge.svg)](https://mvnrepository.com/artifact/com.intuit.karate/karate-core) [![Build Status](https://travis-ci.org/intuit/karate.svg?branch=master)](https://travis-ci.org/intuit/karate) [![GitHub release](https://img.shields.io/github/release/intuit/karate.svg)](https://github.com/intuit/karate/releases) [![Support Slack](https://img.shields.io/badge/support-slack-red.svg)](https://github.com/intuit/karate/wiki/Support) [![Twitter Follow](https://img.shields.io/twitter/follow/KarateDSL.svg?style=social&label=Follow)](https://twitter.com/KarateDSL)

webservice enables you to script a sequence of calls to any kind of web-service and assert that the responses are as expected.  It makes it really easy to build complex request payloads, traverse data within the responses, and chain data from responses into the next request. Karate's payload validation engine can perform a 'smart compare' of two JSON or XML documents without being affected by white-space or the order in which data-elements actually appear, and you can opt to ignore fields that you choose.

webservice is the only open-source tool that combines web-API testing and [test-doubles](karate-netty) into a single, *unified* test automation framework. And you can re-use API Functional Tests as [Performance Tests](karate-gatling) !

Since Karate is built on top of [Cucumber-JVM](https://github.com/cucumber/cucumber-jvm), you can run tests and generate reports like any standard Java project. But there is also a [stand-alone executable](karate-netty#standalone-jar) for teams that are not comfortable with Java. And you can write tests in a language-neutral syntax designed to make dealing with HTTP, JSON, GraphQL or XML - **simple**. 

## Diagram

<a href="https://gist.github.com/ptrthomas/d5a2d9e15d0b07e4f1b46f692a599f93"><img src="./apis-versus-web-services-1.png" height="400" /></a>

> If you are familar with Cucumber, the [*big difference*](#cucumber-vs-karate) here is that you **don't** need to write extra "glue" code or Java "step definitions" !
