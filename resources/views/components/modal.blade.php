
<!-----
              add this code to this very first div:

            -->
<div class="overflow-y-auto fixed inset-0 z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="
          flex
          items-end
          justify-center
          min-h-screen
          px-4
          pt-4
          pb-20
          text-center
          sm:block sm:p-0
        ">
        <!--This is the background that overlays when the modal is active. It  has opacity, and that's why the background looks gray.-->
        <!-----
        add this code to this very first div:
        fixed inset-0
      -->
        <div class="transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <!--Modal panel : This is where you put the pop-up's content, the div on top this coment is the wrapper -->
        <div class="
            inline-block
            p-5
            overflow-hidden
            text-left
            align-bottom
            transition-all
            transform
            bg-white
            rounded-lg
            shadow-2xl
            lg:p-16
            sm:my-8 sm:align-middle sm:max-w-xl sm:w-full
          ">
            <div>
                <div class="mt-3 text-left sm:mt-5">
                    <h1 class="
                  mb-8
                  text-2xl
                  font-semibold
                  leading-none
                  tracking-tighter
                  text-neutral-600
                "> Unsubscribe </h1>
                    <p class="mx-auto text-base leading-relaxed text-gray-300"> Free and Premium themes, UI Kit's, templates and landing pages built with Tailwind CSS, HTML &amp; Next.js. </p>
                </div>
            </div>
            <form action="" method="post" id="revue-form" name="revue-form" target="_blank" class="
              p-2
              mt-8
              transition
              duration-500
              ease-in-out
              transform
              border2
              bg-gray-50
              md:mx-auto
              rounded-xl
              sm:max-w-lg sm:flex
            ">
                <div class="flex-1 min-w-0 revue-form-group">
                    <label for="member_email" class="sr-only">Email address</label>
                    <input id="cta-email" type="email" class="
                  block
                  w-full
                  px-5
                  py-3
                  text-base text-neutral-600
                  placeholder-gray-300
                  transition
                  duration-500
                  ease-in-out
                  transform
                  bg-transparent
                  border border-transparent
                  rounded-md
                  focus:outline-none
                  focus:border-transparent
                  focus:ring-2
                  focus:ring-white
                  focus:ring-offset-2
                  focus:ring-offset-gray-300
                " placeholder="Enter your email  ">
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-3 revue-form-actions">
                    <button type="submit" value="Subscribe" name="member[subscribe]" id="member_submit" class="
                  block
                  w-full
                  px-5
                  py-3
                  text-base
                  font-medium
                  text-white
                  bg-blue-400
                  border border-transparent
                  rounded-lg
                  shadow
                  hover:bg-blue-500
                  focus:outline-none
                  focus:ring-2
                  focus:ring-white
                  focus:ring-offset-2
                  focus:ring-offset-gray-300
                  sm:px-10
                "> Notify me </button>
                </div>
            </form>
            <div class="sm:max-w-lg sm:flex md:mx-auto">
                <p class="mt-3 text-xs text-gray-300"> By subscribing, you agree with Revue’s <a target="_blank" href="https://www.getrevue.co/terms">Terms of Service</a> and <a target="_blank" href="https://www.getrevue.co/privacy">Privacy Policy</a>. </p>
            </div>
        </div>
    </div>
</div>
