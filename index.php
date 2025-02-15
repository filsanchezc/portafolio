<?php include './templates/header.html'; ?>

    <section class="hero flex flex-col items-center justify-center h-screen text-center pt-32 px-5">
        <h2 class="text-5xl md:text-6xl font-extrabold mb-4 text-yellow-400 animate-bounce">Hi, I'm John Doe</h2>
        <p class="text-xl md:text-2xl mb-6 max-w-2xl mx-auto leading-relaxed">A Web Developer blending design, technology, and innovation to build stunning web experiences.</p>
        <a href="#projects" class="bg-yellow-400 px-8 py-3 rounded-full text-gray-900 font-semibold hover:bg-yellow-500 transition shadow-lg">View My Work</a>
    </section>

    <section id="about" class="p-10 bg-gray-800 rounded-lg shadow-lg mx-5 my-10">
        <h3 class="text-4xl font-bold mb-6 text-yellow-400">About Me</h3>
        <p class="mb-4 text-lg leading-relaxed">I am a passionate web developer with a knack for building dynamic, responsive websites using modern technologies like HTML, CSS, JavaScript, React, and more.</p>
        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_4kx2q32n.json" background="transparent" speed="1" loop autoplay class="w-full h-64"></lottie-player>
    </section>

    <section id="projects" class="p-10 bg-gradient-to-r from-gray-800 to-gray-700 rounded-lg shadow-lg mx-5 my-10">
        <h3 class="text-4xl font-bold mb-6 text-yellow-400">Projects</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-700 p-6 rounded-lg hover:shadow-2xl transition transform hover:scale-105">
            <h4 class="text-2xl font-semibold mb-3">Project One</h4>
            <p class="text-gray-300">A modern website built with HTML, CSS, and JavaScript, designed for responsiveness and performance.</p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg hover:shadow-2xl transition transform hover:scale-105">
            <h4 class="text-2xl font-semibold mb-3">Project Two</h4>
            <p class="text-gray-300">An interactive dashboard developed with React and styled with TailwindCSS, providing real-time analytics.</p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg hover:shadow-2xl transition transform hover:scale-105">
            <h4 class="text-2xl font-semibold mb-3">Project Three</h4>
            <p class="text-gray-300">A portfolio website showcasing stunning animations, smooth transitions, and elegant design.</p>
        </div>
        </div>
    </section>

    <section id="contact" class="p-10 bg-gray-900 rounded-lg shadow-lg mx-5 my-10">
        <h3 class="text-4xl font-bold mb-6 text-yellow-400">Contact Me</h3>
        <form class="flex flex-col space-y-4 max-w-xl mx-auto">
        <input type="text" placeholder="Name" class="p-3 rounded-lg bg-gray-800 border border-yellow-400 text-white" />
        <input type="email" placeholder="Email" class="p-3 rounded-lg bg-gray-800 border border-yellow-400 text-white" />
        <textarea placeholder="Message" rows="5" class="p-3 rounded-lg bg-gray-800 border border-yellow-400 text-white"></textarea>
        <button type="submit" class="bg-yellow-400 px-8 py-3 rounded-full text-gray-900 font-semibold hover:bg-yellow-500 transition shadow-lg">Send</button>
        </form>
    </section>

<?php include './templates/footer.html'; ?>