<div class="mt-8 lg:mt-0 lg:ml-12 w-full lg:w-1/2">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">


        <div class="md:col-span-2">
            <img class="w-full h-[25rem] object-cover rounded-lg" src="{{ asset($activityImages[0]->image->url) }}" />

        </div>

        <div>
            <img class="w-full h-[20rem] object-cover rounded-lg" src="{{ asset($activityImages[1]->image->url) }}" />
        </div>

        <div>
            <img class="w-full h-[20rem] object-cover rounded-lg" src="{{ asset($activityImages[2]->image->url) }}" />
        </div>

    </div>


    <p class="mt-8 text-sm sm:text-base lg:text-lg">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis magni recusandae modi quidem. Iusto id sequi numquam possimus pariatur ullam autem? Distinctio deleniti nemo aperiam iste saepe velit itaque autem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, porro. Quae nemo aspernatur hic, enim culpa blanditiis quod similique dicta ex consequatur nihil non aliquam nulla sapiente eos, omnis repellat.
    </p>


    <div class="mt-8">
        <a href="{{route('plans')}}" class="">
            <div class="bg-orange-600 text-white py-2 px-4 rounded-full text-sm sm:text-base lg:text-lg w-full lg:w-auto text-center">
                    Diseñar un plan
            </div>
        </a>
    </div>
</div>
