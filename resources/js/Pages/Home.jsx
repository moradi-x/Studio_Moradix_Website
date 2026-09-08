import MainLayout from '../Layouts/MainLayout';
import ServiceCard from '../Components/ServiceCard';
import { Link } from '@inertiajs/react';
import FadeIn from "../Components/FadeIn";

export default function Home() {

    return (

        <MainLayout>

            <FadeIn>

                <section className="px-8 py-24">

                    <div className="max-w-5xl">

                        <p className="text-sm uppercase tracking-widest mb-6">
                            Digital Studio
                        </p>


                        <h1 className="text-6xl font-bold leading-tight">
                            We build digital
                            <br />
                            experiences for
                            <br />
                            modern brands.
                        </h1>


                        <p className="mt-8 text-xl max-w-2xl">
                            Studio Moradix creates websites,
                            brand identities and digital experiences
                            that help businesses grow.
                        </p>


                        <div className="mt-10 flex gap-5">

                            <Link
                                href="/projects"
                                className="px-6 py-3 bg-black text-white rounded-full"
                            >
                                View Projects
                            </Link>


                            <a
                                href="/contact"
                                className="px-6 py-3 border rounded-full"
                            >
                                Start a Project
                            </a>

                        </div>

                    </div>

                </section>

            </FadeIn>


            <FadeIn>

                <section className="px-8 py-24">

                    <div className="max-w-5xl">

                        <p className="uppercase tracking-widest text-sm mb-6">
                            Services
                        </p>


                        <h2 className="text-4xl font-bold mb-12">
                            What we do
                        </h2>


                        <div className="grid md:grid-cols-2 gap-8">

                            <ServiceCard
                                title="Web Development"
                                description="Modern, fast and scalable websites built with latest technologies."
                            />


                            <ServiceCard
                                title="UI/UX Design"
                                description="User-focused interfaces designed for better digital experiences."
                            />


                            <ServiceCard
                                title="Brand Identity"
                                description="Creating unique visual identities that represent your brand."
                            />


                            <ServiceCard
                                title="Digital Strategy"
                                description="Helping brands grow with smart digital solutions."
                            />

                        </div>

                    </div>

                </section>

            </FadeIn>

        </MainLayout>

    );
}