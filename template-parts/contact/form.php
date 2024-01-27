<section class="container py-10">
    <form action="" class='px-40'>
        <div class="space-y-5 ">
            <h4 class="text-lg font-semibold">Choose the types of project :</h4>
            <div class="type-project-container">
                <div class="project-item"> item 1</div>
                <div class="project-item">item 2</div>
                <div class="project-item-selected">item 4</div>
                <div class="project-item-selected">item 5</div>
                <div class="project-item">item 6</div>
                <div class="project-item">item 7</div>
                <div class="project-item-selected">item 8</div>
            </div>
        </div>

        <div class="flex flex-col gap-3 my-20">
            <input type="text" placeholder="Your Name *"
                class="bg-transparent focus:ring-0 border-b border-x-0 border-t-0 border-b-neutral-500 px-0 w-full placeholder:text-white">
            <div class="flex items-center justify-between gap-3">
                <input type="email" placeholder="Your Email *"
                    class="bg-transparent focus:ring-0 border-b border-x-0 border-t-0 border-b-neutral-500 px-0 w-full placeholder:text-white">
                <input type="tel" placeholder="Your Phone *"
                    class="bg-transparent focus:ring-0 border-b border-x-0 border-t-0 border-b-neutral-500 px-0 w-full placeholder:text-white">
            </div>
            <input type="text" placeholder="Company"
                class="bg-transparent focus:ring-0 border-b border-x-0 border-t-0 border-b-neutral-500 px-0 w-full placeholder:text-white">
            <input type="text" placeholder="Title"
                class="bg-transparent focus:ring-0 border-b border-x-0 border-t-0 border-b-neutral-500 px-0 w-full placeholder:text-white">
            <textarea name="" id="" cols="0" rows="0"
                class="bg-transparent focus:ring-0 border-b border-x-0 border-t-0 border-b-neutral-500 px-0 w-full placeholder:text-white"
                placeholder="Message *"></textarea>
        </div>

        <div class="space-y-5 mb-20">
            <h4 class="text-lg font-semibold">Choose the budgets :</h4>
            <div class="type-project-container">
                <div class="project-item"> + 10.000</div>
                <div class="project-item">10 - 20K</div>
                <div class="project-item-selected">20 - 30K</div>
                <div class="project-item-selected"> + 30.000</div>

            </div>
        </div>

        <button class="py-2 px-6 bg-white text-black">Submit</button>
    </form>
</section>