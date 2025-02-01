<div class="fixed pin-t pin-x z-40">

    <div class="bg-gradient-primary text-white h-1"></div>

    <nav class="flex items-center justify-between text-black bg-navbar shadow-xs h-16">
        <div class="flex items-center flex-no-shrink">
            <a href="{{ url('/') }}" class="flex items-center flex-no-shrink text-black mx-4">
                @include("larecipe::partials.logo")

                <p class=" inline-block mr-2 ml-2 shadow-xs h-20 text-grey-lightest border-0 px-2 py-1 rounded-full">
                    R-JayS <span><svg class="h-6 w-6 -m-1 " version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                      viewBox="0 0 512 512" xml:space="preserve">
                                    <circle style="fill:#343940;" cx="256" cy="256" r="256"/>
                                    <g>
                                        <path style="fill:#b4c1d4;" d="M83.928,259.304L201.32,204.8v25.92l-88.776,38.88v0.488l88.8,38.888v25.92l-117.416-54.56
                                            C83.928,280.336,83.928,259.304,83.928,259.304z"/>
                                        <path style="fill:#b4c1d4;" d="M219.448,344.656l52.336-177.32h24.696l-52.336,177.32H219.448z"/>
                                        <path style="fill:#b4c1d4;" d="M428.072,281.064L310.68,334.872v-25.92l90.736-38.888V269.6l-90.736-38.912V204.8l117.392,53.808
                                            V281.064z"/>
                                    </g>
                                    </svg>
                    </span>
                </p>


            </a>

            <div class="switch">
                <input type="checkbox" name="1" id="1" v-model="sidebar" class="switch-checkbox" />
                <label class="switch-label" for="1"></label>
            </div>
        </div>

        <div class="block mx-4 flex items-center">
            @if(config('larecipe.search.enabled'))
                <larecipe-button id="search-button"
                    :type="searchBox ? 'primary' : 'link'"
                    @click="searchBox = ! searchBox"
                    class="px-4">
                    <i class="fas fa-search" id="search-button-icon"></i>
                </larecipe-button>
            @endif

            <larecipe-button tag="a" href="https://github.com/saleem-hadad/larecipe" target="__blank" type="black" class="mx-2 px-4">
                <i class="fab fa-github"></i>
            </larecipe-button>

            {{-- versions dropdown --}}
            <larecipe-dropdown>
                <larecipe-button type="primary" class="flex">
                    {{ $currentVersion }} <i class="mx-1 fa fa-angle-down"></i>
                </larecipe-button>

                <template slot="list">
                    <ul class="list-reset">
                        @foreach ($versions as $version)
                            <li class="py-2 hover:bg-grey-lightest">
                                <a class="px-6 text-grey-darkest" href="{{ route('larecipe.show', ['version' => $version, 'page' => $currentSection]) }}">{{ $version }}</a>
                            </li>
                        @endforeach
                    </ul>
                </template>
            </larecipe-dropdown>
            {{-- /versions dropdown --}}

            @auth
                {{-- account --}}
                <larecipe-dropdown>
                    <larecipe-button type="white" class="ml-2">
                        {{ auth()->user()->name ?? 'Account' }} <i class="fa fa-angle-down"></i>
                    </larecipe-button>

                    <template slot="list">
                        <form action="/logout" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="py-2 px-4 text-white bg-danger inline-flex"><i class="fa fa-power-off mr-2"></i> Logout</button>
                        </form>
                    </template>
                </larecipe-dropdown>
                {{-- /account --}}
            @endauth
        </div>
    </nav>
</div>
