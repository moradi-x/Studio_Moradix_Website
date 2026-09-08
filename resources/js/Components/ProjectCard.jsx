export default function ProjectCard({title, description, image}) {

    return (
        <div className="group border rounded-3xl overflow-hidden">

            <div className="overflow-hidden">
                <img
                    src={image}
                    alt={title}
                    className="w-full h-64 object-cover transition duration-500 group-hover:scale-105"
                />
            </div>


            <div className="p-6">

                <h3 className="text-2xl font-bold">
                    {title}
                </h3>


                <p className="mt-3 text-gray-600">
                    {description}
                </p>

            </div>

        </div>
    );
}