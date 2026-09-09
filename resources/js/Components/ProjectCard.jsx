import { Link } from "@inertiajs/react";


export default function ProjectCard({
    title,
    description,
    image,
    technology,
    slug
}) {


    return (

        <Link href={`/projects/${slug}`}>

            <div className="border rounded-2xl overflow-hidden hover:scale-105 transition">


                {image && (

                    <img
                        src={`/storage/${image}`}
                        alt={title}
                        className="w-full h-64 object-cover"
                    />

                )}


                <div className="p-6">

                    <h2 className="text-2xl font-bold">
                        {title}
                    </h2>


                    <p className="mt-4">
                        {description}
                    </p>


                    <p className="mt-4 text-sm uppercase">
                        {technology}
                    </p>


                </div>


            </div>

        </Link>

    );

}