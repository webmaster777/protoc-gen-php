<?php
namespace google\protobuf;

// @@protoc_insertion_point(namespace:.google.protobuf.SourceCodeInfo)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: google/protobuf/descriptor.proto
 *
 * Encapsulates information about the original source file from which a
 * FileDescriptorProto was generated.
 *
 * -*- magic methods -*-
 *
 * @method array getLocation()
 * @method void appendLocation(\google\protobuf\SourceCodeInfo\Location $value)
 */
class SourceCodeInfo extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.google.protobuf.SourceCodeInfo)
  
  /**
   * A Location identifies a piece of source code in a .proto file which
   * corresponds to a particular definition.  This information is intended
   * to be useful to IDEs, code indexers, documentation generators, and similar
   * tools.
   * 
   * For example, say we have a file like:
   *   message Foo {
   *     optional string foo = 1;
   *   }
   * Let's look at just the field definition:
   *   optional string foo = 1;
   *   ^       ^^     ^^  ^  ^^^
   *   a       bc     de  f  ghi
   * We have the following locations:
   *   span   path               represents
   *   [a,i)  [ 4, 0, 2, 0 ]     The whole field definition.
   *   [a,b)  [ 4, 0, 2, 0, 4 ]  The label (optional).
   *   [c,d)  [ 4, 0, 2, 0, 5 ]  The type (string).
   *   [e,f)  [ 4, 0, 2, 0, 1 ]  The name (foo).
   *   [g,h)  [ 4, 0, 2, 0, 3 ]  The number (1).
   * 
   * Notes:
   * - A location may refer to a repeated field itself (i.e. not to any
   *   particular index within it).  This is used whenever a set of elements are
   *   logically enclosed in a single code segment.  For example, an entire
   *   extend block (possibly containing multiple extension definitions) will
   *   have an outer location whose path refers to the "extensions" repeated
   *   field without an index.
   * - Multiple locations may have the same path.  This happens when a single
   *   logical declaration is spread out across multiple places.  The most
   *   obvious example is the "extend" block again -- there may be multiple
   *   extend blocks in the same scope, each of which will have the same path.
   * - A location's span is not always a subset of its parent's span.  For
   *   example, the "extendee" of an extension declaration appears at the
   *   beginning of the "extend" block and is shared by all extensions within
   *   the block.
   * - Just because a location's span is a subset of some other location's span
   *   does not mean that it is a descendent.  For example, a "group" defines
   *   both a type and a field in a single declaration.  Thus, the locations
   *   corresponding to the type and field and their components will overlap.
   * - Code which tries to interpret locations should probably be designed to
   *   ignore those that it doesn't understand, as more types of locations could
   *   be recorded in the future.
   *
   * @var array $location
   * @tag 1
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   * @see \google\protobuf\SourceCodeInfo\Location
   **/
  protected $location;
  
  
  // @@protoc_insertion_point(properties_scope:.google.protobuf.SourceCodeInfo)

  // @@protoc_insertion_point(class_scope:.google.protobuf.SourceCodeInfo)

  /**
   * get descriptor for protocol buffers
   * 
   * @return \ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;
    
    if (!isset($descriptor)) {
      $desc = new \ProtocolBuffers\DescriptorBuilder();
      $desc->addField(1, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "location",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => '\google\protobuf\SourceCodeInfo\Location',
      )));
      // @@protoc_insertion_point(builder_scope:.google.protobuf.SourceCodeInfo)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
