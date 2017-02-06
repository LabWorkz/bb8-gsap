A Pen created at CodePen.io. You can find this one at http://codepen.io/nerdmanship/pen/ZLoyPG.

 # Droids 🤖 

## [Link: BB8 reference on Youtube](https://youtu.be/_RWWKFqv7EM?t=1m53s)

I'm not a blockbuster kind of guy, but I just can't resist when it comes to Starwars. It's such a captivating saga. The divine Force that connects us all, the inner battle against evil, and of course the little companion droids. BB8 is such a  well designed character. While recognising some reused features from R2D2's lovable personality, we also so see a reinvented droid with his own quirky style and functionality.

> Making a BB8 graphic (SVG) and bringing him to life (GSAP) was my way of getting some quality time and getting to know the little guy.

***

# Null objects 🅾️

    // Tween null object from 0 to 100 over 1 second
    null = { value: 0 }
    TweenMax.to(null, 1, { value: 100 })

In this exploration I mainly wanted to try out this idea I had about creating the javascript equivalent of a concept from After Effects called [null object](http://www.surfacedstudio.com/tutorials/after-effects-basics-null-objects). It basically means that you animate the value of an non-visual element and connect that value to one or many visual elements that should depend equally on that value. In this case that means that I could set up the relationship between all the parallaxing elements of the head once and then control them in perfect sync by only tweening the null object. It's really powerful.

Search for <code>headNull</code> in the javascript.

It's a first rough draft of the concept and can for sure be developed to be both smarter and more straight forward. Next time I'll do it I'll simply create an object called <code>null</code> and then add descriptive properties to it, such as <code>headX</code> and <code>headRotation</code>, and tween those. It'll keep everything smart, readable and confined.

***

# Superior UX ,  tech and bla bla bla 🚀
I always feel like emphasising the greatness of these methods and technologies. Be sure to check out [GSAP](https://www.greensock.com) if you're unfamiliar. It really takes vector animation to a new level. It's also important to stress that this stuff weighs virtually nothing compared to other online media. You can create 10 animations like this and load for the same cost as one optimised image. It enables us to load websites super fast and use a more emotional language when communicating to people. Same goes for interactivity. It's super easy to draw inspiration from games and immersive experiences to make websites more interactive, engaging and meaningful.

❤️ Did you notice you can hover him for slow motion? ❤️