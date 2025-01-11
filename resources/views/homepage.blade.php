@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <section class="py-32 relative flex items-center">
        <div class="absolute inset-0 bg-[url('/public/background1.png')] bg-cover bg-center"></div>
        <div class="container mx-auto px-4 py-32 relative z-10">
            <div class="max-w-5xl text-white">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-6">
                    Cybersecurity Made Simple with Sangfor Cyber Command
                </h1>
                <p class="max-w-3xl text-4xl font-semibold mb-8">
                    Simplify your cybersecurity with Sangfor Cyber Command's user-friendly interface and comprehensive threat protection.
                </p>
                <div class="inline-flex">
                    <a href="#trial" class="inline-flex items-center">
                        <span class="bg-[#00C800] text-white px-6 py-2.5 rounded-l font-semibold hover:bg-[#00B300] transition-colors">
                            FREE TRIAL
                        </span>
                        <span class="bg-[#1a7c1a] text-white p-2.5 rounded-r hover:bg-[#1e6b1e] transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

        
<!-- About & Form Section -->
<section class="py-32 relative" id="trial">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-[url('/public/background2.png')] bg-cover bg-center opacity-40"></div>
    
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="flex flex-col md:flex-row justify-center items-center gap-20 relative">
            <!-- Left Column - About Content -->
            <div class="md:w-4/12">
                <h2 class="text-[40px] font-bold text-[#1E2A4F] mb-8">About Sangfor<br/>Cyber Command</h2>
                <div class="space-y-6 text-gray-600 text-[15px]">
                    <p class="leading-relaxed">
                        Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                    </p>
                    <p class="leading-relaxed">
                        It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.
                    </p>
                    <p class="leading-relaxed">
                        The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.
                    </p>
                    <p class="leading-relaxed">
                        Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.
                    </p>
                </div>
            </div>
            
            <!-- Right Column - Form -->
            <div class="md:w-5/12">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-[#1E2A4F] mb-1">Dapatkan Free Trial selama 1 bulan,</h3>
                    <p class="text-gray-600 mb-6">analisa keamanan network anda dan lihat hasilnya!</p>
                    
                    <form action="{{ route('form.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1 ml-4">
                                    First Name <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    name="first_name" 
                                    placeholder="First Name"
                                    required 
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                >
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1 ml-4">
                                    Last Name <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    name="last_name" 
                                    placeholder="Last Name"
                                    required 
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                                >
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1 ml-4">
                                Corporate Email <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="email" 
                                name="email" 
                                placeholder="email@mail.com"
                                required 
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1 ml-4">
                                Job Title <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="job_title" 
                                placeholder="Your Job"
                                required 
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1 ml-4">
                                Company Name <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="company_name" 
                                placeholder="Your Company"
                                required 
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1 ml-4">
                                Industry <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <select 
                                    name="industry" 
                                    required 
                                    class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 bg-white appearance-none"
                                >
                                    <option value="">Select Industry</option>
                                    <option value="technology">Technology</option>
                                    <option value="finance">Finance</option>
                                    <option value="healthcare">Healthcare</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1 ml-4">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="tel" 
                                name="phone" 
                                placeholder="Your number"
                                required 
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            >
                        </div>

                        <div class="flex items-start gap-3">
                            <input 
                                type="checkbox" 
                                name="agreement" 
                                id="agreement" 
                                required
                                class="mt-1.5"
                            >
                            <label for="agreement" class="text-sm font-medium text-gray-600">
                                click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!
                            </label>
                        </div>

                        <div class="flex justify-center">
                            <button 
                                type="submit" 
                                class="w-48 px-14 bg-[#20b420] rounded text-white py-3 font-semibold hover:bg-[#2b8f2b] transition-colors text-lg"
                            >
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Advantages Section -->
<section class="relative py-32">
    <!-- Background with gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-green-600"></div>
    <!-- Pattern overlay with reduced opacity -->
    <div class="absolute inset-0 bg-[url('/public/background3.png')] bg-cover bg-center opacity-40"></div>
    <!-- Content container -->
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-4xl font-bold text-white text-center mb-16">Sangfor Cyber Command Advantages</h2>
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <!-- Advanced Threat Detection -->
            <div class="bg-white p-10 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex flex-col items-center text-center">
                    <div class="relative mb-6">
                        <img src="/Virus Scan.png" alt="Advanced Threat Detection" class="h-40 relative z-10"/>
                        <div class="absolute inset-0 bg-blue-100 rounded-full w-16 h-16 mx-auto my-auto"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1E2A4F] mb-4">Advanced Threat Detection</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                </div>
            </div>

            <!-- Network Visibility and Control -->
            <div class="bg-white p-10 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex flex-col items-center text-center">
                    <div class="relative mb-6">
                        <img src="/Anti Virus.png" alt="Network Visibility and Control" class="h-40 relative z-10"/>
                        <div class="absolute inset-0 bg-blue-100 rounded-full w-16 h-16 mx-auto my-auto"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1E2A4F] mb-4">Network Visibility and Control</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                </div>
            </div>

            <!-- Cloud Security -->
            <div class="bg-white p-10 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex flex-col items-center text-center">
                    <div class="relative mb-6">
                        <img src="/Upload.png" alt="Cloud Security" class="h-40 relative z-10"/>
                        <div class="absolute inset-0 bg-blue-100 rounded-full w-16 h-16 mx-auto my-auto"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1E2A4F] mb-4">Cloud Security</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                </div>
            </div>

            <!-- Comprehensive Security Management -->
            <div class="bg-white p-10 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <div class="flex flex-col items-center text-center">
                    <div class="relative mb-6">
                        <img src="/Cyber Security.png" alt="Comprehensive Security Management" class="h-40 relative z-10"/>
                        <div class="absolute inset-0 bg-blue-100 rounded-full w-16 h-16 mx-auto my-auto"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1E2A4F] mb-4">Comprehensive Security Management</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-[32px] font-bold text-center text-[#2A3356] mb-16">Sangfor Cyber Command Features</h2>
        
        <div class="max-w-5xl mx-auto">
            <!-- Top Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Threat Intelligence -->
                <div class="text-center">
                    <div class="relative inline-block mb-6">
                        <img src="/bg.png" alt="" class="w-40 h-40"/>
                        <img src="/Retina Lock.png" alt="Threat Intelligence" class="w-28 h-28 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"/>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#2A3356]">Threat Intelligence</h3>
                    <p class="text-gray-600 max-w-60 mx-auto text-sm">
                        Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.
                    </p>
                </div>

                <!-- Real-Time Detections -->
                <div class="text-center">
                    <div class="relative inline-block mb-6">
                        <img src="/bg.png" alt="" class="w-40 h-40"/>
                        <img src="/Online Sopping.png" alt="Real-Time Detections" class="w-28 h-28 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"/>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#2A3356]">Real-Time Detections</h3>
                    <p class="text-gray-600 max-w-60 mx-auto text-sm">
                        Real-time alert system provides instant notification of potential security incidents.
                    </p>
                </div>

                <!-- Threats Investigation -->
                <div class="text-center">
                    <div class="relative inline-block mb-6">
                        <img src="/bg.png" alt="" class="w-40 h-40"/>
                        <img src="/Spyware.png" alt="Threats Investigation" class="w-28 h-28 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"/>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#2A3356]">Threats Investigation</h3>
                    <p class="text-gray-600 max-w-60 mx-auto text-sm">
                        In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
                    </p>
                </div>
            </div>

            <!-- Bottom Row -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-1 max-w-3xl mx-auto">
                <!-- Comprehensive Security Solutions -->
                <div class="text-center">
                    <div class="relative inline-block mb-6">
                        <img src="/bg.png" alt="" class="w-40 h-40"/>
                        <img src="/Hacker.png" alt="Comprehensive Security Solutions" class="w-28 h-28 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"/>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#2A3356]">Comprehensive<br/>Security Solutions</h3>
                    <p class="text-gray-600 max-w-60 mx-auto text-sm">
                        In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
                    </p>
                </div>

                <!-- Rapid Response -->
                <div class="text-center">
                    <div class="relative inline-block mb-6">
                        <img src="/bg.png" alt="" class="w-40 h-40"/>
                        <img src="/Safe Chat.png" alt="Rapid Response" class="w-28 h-28 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"/>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#2A3356]">Rapid Response</h3>
                    <p class="text-gray-600 max-w-60 mx-auto text-sm">
                        Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer References Section -->
<section class="pb-24 relative">
    <!-- Value Proposition Content -->
    <div class="relative pb-32">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-[url('/public/background4.png')] bg-cover bg-center opacity-70"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-[32px] pt-12 font-extrabold text-center text-[#2A3356] mb-8">
                Sangfor Cyber Command's<br/>Value to Customers
            </h2>
            <div class="max-w-xl mx-auto font-medium space-y-6 text-lg">
                <div class="flex items-start gap-4">
                    <img src="/checkmark.png" alt="" class="w-6 h-6 mt-1 flex-shrink-0"/>
                    <p class="text-gray-600">Detect known dan unknown threats</p>
                </div>
                
                <div class="flex items-start gap-4">
                    <img src="/checkmark.png" alt="" class="w-6 h-6 mt-1 flex-shrink-0"/>
                    <p class="text-gray-600">Much better visibility of security posture of the entire infrastructure</p>
                </div>
                
                <div class="flex items-start gap-4">
                    <img src="/checkmark.png" alt="" class="w-6 h-6 mt-1 flex-shrink-0"/>
                    <p class="text-gray-600">Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized</p>
                </div>
                
                <div class="flex items-start gap-4">
                    <img src="/checkmark.png" alt="" class="w-6 h-6 mt-1 flex-shrink-0"/>
                    <p class="text-gray-600">Faster Response to improve overall security control</p>
                </div>
                
                <div class="flex items-start gap-4">
                    <img src="/checkmark.png" alt="" class="w-6 h-6 mt-1 flex-shrink-0"/>
                    <p class="text-gray-600">Much more cost effective than other solutions such as SIEM</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Overlapping Title -->
    <div class="absolute left-1/2 transform -translate-x-1/2 bottom-[180px] w-full max-w-xl z-20">
        <div class="bg-[#2A3356] py-4 px-8 shadow-lg">
            <h2 class="text-2xl font-bold text-center text-white">
                Cyber Command Customers Reference
            </h2>
        </div>
    </div>

    <!-- Customer Logos -->
    <div class="container mx-auto px-4 pt-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 items-center max-w-5xl mx-auto">
            <img src="/jnt-logo.png" alt="J&T Express" class="max-h-12 mx-auto"/>
            <img src="/jasaraharja-logo.png" alt="Jasa Raharja Putera Insurance" class="max-h-12 mx-auto"/>
            <img src="/okbank-logo.png" alt="OK Bank Indonesia" class="max-h-12 mx-auto"/>
            <img src="/samudera-logo.png" alt="Samudera Indonesia" class="max-h-12 mx-auto"/>
        </div>
    </div>
</section>

<!-- Explore Section -->
<section class="py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-[32px] font-bold text-[#2A3356] mb-4">
                Explore Sangfor Cyber Command with Helios
            </h2>
            <p class="text-gray-600">
                Helios Informatika Nusantara as Sangfor Distributor will provide
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- NDR Implementation -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gradient-to-br from-violet-950 to-green-700 mb-6">
                    <img src="/research 1.png" alt="" class="w-12 h-12"/>
                </div>
                <h3 class="text-xl font-bold text-[#2A3356]">NDR Implementation</h3>
            </div>

            <!-- Incident Response -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gradient-to-br from-violet-950 to-green-700 mb-6">
                    <img src="/quality-assurance 1.png" alt="" class="w-12 h-12"/>
                </div>
                <h3 class="text-xl font-bold text-[#2A3356]">Incident Response<br/>and Threat Hunting</h3>
            </div>

            <!-- Device Security -->
            <div class="bg-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gradient-to-br from-violet-950 to-green-700 mb-6 ">
                    <img src="/rpa 1.png" alt="" class="w-12 h-12"/>
                </div>
                <h3 class="text-xl font-bold text-[#2A3356]">Device Security<br/>Maintenance</h3>
            </div>
        </div>
    </div>
</section>

</div>
@endsection

