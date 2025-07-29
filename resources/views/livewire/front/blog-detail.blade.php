@assets
<!-- theme prism -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/9000.0.1/themes/prism-tomorrow.min.css">
<!-- need for prism -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-jsx.min.js"></script>
<!-- end need for prism -->
<style lang="scss">
    /* Custom styles for optimal reading */
    .prose-custom {
        line-height: 1.8;
    }

    .prose-custom h2 {
        margin-top: 2em;
        margin-bottom: 1em;
    }

    .prose-custom h3 {
        margin-top: 1.5em;
        margin-bottom: 0.75em;
    }

    .prose-custom p {
        margin-bottom: 1.25em;
    }

    .prose-custom pre {
        margin: 1.5em 0;
        border-radius: 0.5rem;
        overflow-x: auto;
    }

    .reading-progress {
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        z-index: 1000;
        transition: width 0.1s ease-out;
    }

    .toc-fixed {
        position: sticky;
        top: 100px;
    }

    @media (max-width: 768px) {
        .toc-fixed {
            position: relative;
            top: 0;
        }
    }
</style>
@endassets

<div>
    <!-- Article Header -->
    <header
        class="pt-20 pb-8 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-indigo-50 to-purple-50 dark:from-gray-800 dark:to-gray-900">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-4">
                <span
                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                    Web Development
                </span>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight">
                React Hooks Best Practices untuk Performa Maksimal
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                Pelajari cara menggunakan React Hooks secara efisien untuk meningkatkan performa aplikasi React Anda.
            </p>
            <div class="flex items-center justify-center space-x-4 text-sm text-gray-600 dark:text-gray-400">
                <span>15 Januari 2024</span>
                <span>•</span>
                <span>Ditulis oleh John Doe</span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-4xl mx-auto">


            <!-- Article Content -->
            <article class="prose-custom">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">

                    <!-- Hero Image -->
                    <div class="mb-8">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="React Hooks Best Practices" class="w-full h-64 md:h-96 object-cover rounded-lg">
                    </div>

                    <!-- Introduction -->
                    <section id="introduction">
                        <p class="text-lg leading-relaxed mb-6">
                            React Hooks telah merevolusi cara kita menulis komponen React. Dengan hooks, kita bisa
                            menggunakan state dan lifecycle methods dalam functional components, membuat kode lebih
                            bersih dan lebih mudah diuji. Namun, seperti halnya alat yang powerful, hooks juga bisa
                            menjadi bumerang jika tidak digunakan dengan benar.
                        </p>
                        <p class="mb-6">
                            Dalam artikel ini, kita akan membahas best practices untuk menggunakan React Hooks agar
                            aplikasi Anda tetap performant dan maintainable.
                        </p>
                    </section>

                    <!-- useState Section -->
                    <section id="useState">
                        <h2 class="text-2xl font-bold mb-4">1. Menggunakan useState dengan Bijak</h2>

                        <h3 class="text-xl font-semibold mb-3">State Updates yang Efisien</h3>
                        <p class="mb-4">
                            Ketika menggunakan useState, penting untuk memahami bahwa state updates bisa bersifat
                            asynchronous. Gunakan functional updates untuk memastikan Anda bekerja dengan state yang
                            paling up-to-date:
                        </p>

                        <pre><code class="language-javascript">// ❌ Jangan lakukan ini
function Counter() {
  const [count, setCount] = useState(0);
  
  const increment = () => {
    setCount(count + 1);
    setCount(count + 1); // Ini tidak akan menambahkan 2
  };
}</code></pre>

                        <pre><code class="language-javascript">// ✅ Lakukan ini
function Counter() {
  const [count, setCount] = useState(0);
  
  const increment = () => {
    setCount(prevCount => prevCount + 1);
    setCount(prevCount => prevCount + 1); // Ini akan menambahkan 2
  };
}</code></pre>

                        <h3 class="text-xl font-semibold mb-3 mt-6">Complex State dengan useReducer</h3>
                        <p class="mb-4">
                            Untuk state yang kompleks atau memiliki banyak transisi, pertimbangkan menggunakan
                            useReducer daripada multiple useState calls:
                        </p>

                        <pre><code class="language-javascript">const initialState = {
  loading: false,
  data: null,
  error: null,
};

function dataReducer(state, action) {
  switch (action.type) {
    case 'FETCH_START':
      return { ...state, loading: true, error: null };
    case 'FETCH_SUCCESS':
      return { ...state, loading: false, data: action.payload };
    case 'FETCH_ERROR':
      return { ...state, loading: false, error: action.payload };
    default:
      return state;
  }
}

function DataComponent() {
  const [state, dispatch] = useReducer(dataReducer, initialState);
  
  // Lebih mudah untuk mengelola state yang kompleks
}</code></pre>
                    </section>

                    <!-- useEffect Section -->
                    <section id="useEffect">
                        <h2 class="text-2xl font-bold mb-4">2. Optimasi useEffect</h2>

                        <h3 class="text-xl font-semibold mb-3">Dependencies yang Tepat</h3>
                        <p class="mb-4">
                            Salah satu kesalahan umum adalah tidak menyertakan semua dependencies dalam array
                            dependencies useEffect. Ini bisa menyebabkan bugs yang sulit ditemukan:
                        </p>

                        <pre><code class="language-javascript">// ❌ Dependencies tidak lengkap
useEffect(() => {
  console.log(`User ${userId} has ${count} items`);
}, [userId]); // count tidak disertakan</code></pre>

                        <pre><code class="language-javascript">// ✅ Semua dependencies disertakan
useEffect(() => {
  console.log(`User ${userId} has ${count} items`);
}, [userId, count]);</code></pre>

                        <h3 class="text-xl font-semibold mb-3 mt-6">Cleanup Functions</h3>
                        <p class="mb-4">
                            Selalu gunakan cleanup functions untuk subscriptions dan timers:
                        </p>

                        <pre><code class="language-javascript">function TimerComponent() {
  const [seconds, setSeconds] = useState(0);

  useEffect(() => {
    const interval = setInterval(() => {
      setSeconds(prev => prev + 1);
    }, 1000);

    // Cleanup function
    return () => clearInterval(interval);
  }, []);

  return <div>{seconds} seconds</div>;
}</code></pre>
                    </section>

                    <!-- useMemo Section -->
                    <section id="useMemo">
                        <h2 class="text-2xl font-bold mb-4">3. useMemo untuk Memoization</h2>

                        <p class="mb-4">
                            useMemo berguna untuk memoizing expensive calculations, tapi jangan overuse:
                        </p>

                        <pre><code class="language-javascript">// ✅ Gunakan untuk perhitungan mahal
function ExpensiveComponent({ items, filter }) {
  const filteredItems = useMemo(() => {
    return items.filter(item => 
      item.name.toLowerCase().includes(filter.toLowerCase())
    );
  }, [items, filter]);

  return <div>{filteredItems.map(item => <Item key={item.id} {...item} />)}</div>;
}</code></pre>

                        <div class="bg-yellow-50 dark:bg-yellow-900/20 border-l-4 border-yellow-400 p-4 mb-6">
                            <p class="text-sm text-yellow-800 dark:text-yellow-200">
                                <strong>Tip:</strong> Jangan gunakan useMemo untuk semuanya. React.memo dan useMemo
                                memiliki overhead mereka sendiri. Gunakan hanya ketika Anda mengidentifikasi bottleneck
                                nyata.
                            </p>
                        </div>
                    </section>

                    <!-- useCallback Section -->
                    <section id="useCallback">
                        <h2 class="text-2xl font-bold mb-4">4. useCallback untuk Referential Equality</h2>

                        <p class="mb-4">
                            useCallback berguna untuk memoizing function references, terutama saat mengirim callbacks ke
                            child components:
                        </p>

                        <pre><code class="language-javascript">// ❌ Function baru dibuat setiap render
function ParentComponent() {
  const [count, setCount] = useState(0);

  const handleClick = () => {
    console.log('Button clicked');
  };

  return <ChildComponent onClick={handleClick} />;
}</code></pre>

                        <pre><code class="language-javascript">// ✅ Function memoized
function ParentComponent() {
  const [count, setCount] = useState(0);

  const handleClick = useCallback(() => {
    console.log('Button clicked');
  }, []);

  return <ChildComponent onClick={handleClick} />;
}</code></pre>
                    </section>

                    <!-- Custom Hooks Section -->
                    <section id="customHooks">
                        <h2 class="text-2xl font-bold mb-4">5. Custom Hooks untuk Reusability</h2>

                        <p class="mb-4">
                            Ekstrak logika kompleks ke custom hooks untuk reusability dan testability:
                        </p>

                        <pre><code class="language-javascript">// Custom hook untuk fetching data
function useFetch(url) {
  const [state, setState] = useState({
    data: null,
    loading: false,
    error: null,
  });

  useEffect(() => {
    let cancelled = false;

    const fetchData = async () => {
      setState(prev => ({ ...prev, loading: true, error: null }));
      
      try {
        const response = await fetch(url);
        const data = await response.json();
        
        if (!cancelled) {
          setState({ data, loading: false, error: null });
        }
      } catch (error) {
        if (!cancelled) {
          setState(prev => ({ ...prev, loading: false, error }));
        }
      }
    };

    fetchData();

    return () => {
      cancelled = true;
    };
  }, [url]);

  return state;
}</code></pre>
                    </section>

                    <!-- Conclusion -->
                    <section id="conclusion">
                        <h2 class="text-2xl font-bold mb-4">6. Kesimpulan</h2>

                        <p class="mb-4">
                            React Hooks adalah tools yang powerful, tapi dengan great power comes great responsibility.
                            Dengan mengikuti best practices ini, Anda dapat memastikan aplikasi React Anda tetap
                            performant dan maintainable.
                        </p>

                        <ul class="list-disc list-inside space-y-2 mb-6">
                            <li>Selalu gunakan functional updates untuk state yang bergantung pada state sebelumnya</li>
                            <li>Sertakan semua dependencies dalam useEffect</li>
                            <li>Gunakan cleanup functions untuk subscriptions dan timers</li>
                            <li>Optimasi dengan useMemo dan useCallback hanya ketika perlu</li>
                            <li>Ekstrak logika kompleks ke custom hooks</li>
                        </ul>

                        <p>
                            Teruslah bereksperimen dan mengukur performa aplikasi Anda. Tools seperti React DevTools
                            Profiler dapat membantu mengidentifikasi area yang perlu dioptimasi.
                        </p>
                    </section>
                </div>

                <!-- Navigation between posts -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 mt-8">
                    <div class="flex justify-between items-center">
                        <a href="blog-detail.html?id=2"
                            class="flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 hover:underline">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span>Sebelumnya: Optimasi Performa Node.js</span>
                        </a>
                        <a href="blog-detail.html?id=3"
                            class="flex items-center space-x-2 text-indigo-600 dark:text-indigo-400 hover:underline">
                            <span>Selanjutnya: TypeScript Tips</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>


            </article>
        </div>
    </main>
</div>